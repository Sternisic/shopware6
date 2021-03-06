import template from './sw-search-bar-item.html.twig';
import './sw-search-bar-item.scss';

const { Component } = Shopware;
/**
 * @public
 * @description
 * Renders the search result items based on the item type.
 * @status ready
 * @example-type code-only
 * @component-example
 * <sw-search-bar-item :item="{ type: 'customer', entity: [{ name: 'customer name', id: 'uuid' }]}">
 * </sw-search-bar-item>
 */
Component.register('sw-search-bar-item', {
    template,

    inject: ['feature'],

    props: {
        item: {
            type: Object,
            required: false,
            default: () => ({}),
        },
        type: {
            required: true,
            type: String,
        },
        index: {
            type: Number,
            required: true,
        },
        column: {
            type: Number,
            required: true,
        },
        searchTerm: {
            type: String,
            required: false,
            default: null,
        },
        entityIconColor: {
            type: String,
            required: true,
        },
        entityIconName: {
            type: String,
            required: true,
        },
    },

    data() {
        return {
            isActive: false,
            searchTypes: null,
        };
    },

    computed: {
        componentClasses() {
            return [
                {
                    'is--active': this.isActive,
                    'sw-search-bar-item--v2': this.feature.isActive('FEATURE_NEXT_6040'),
                },
            ];
        },

        moduleName() {
            const { action, label, entity } = this.item;

            return action ? this.$tc(
                'global.sw-search-bar-item.addNewEntity',
                0,
                { entity: label?.toLowerCase() ?? this.$tc(`global.entities.${entity}`).toLowerCase() },
            ) : label;
        },

        routeName() {
            return typeof this.item.route === 'object' ? this.item.route : { name: this.item.route };
        },

        iconName() {
            return this.type === 'module' && this.item?.icon ? this.item.icon : this.entityIconName;
        },

        iconColor() {
            return this.type === 'module' && this.item?.color ? this.item.color : this.entityIconColor;
        },

        shortcut() {
            const { action, name } = this.item;

            if (!this.$te(`global.sw-search-bar-item.shortcuts.${name}`)) {
                return false;
            }

            return this.$tc(
                `global.sw-search-bar-item.shortcuts.${name}`,
                action ? 2 : 1,
            );
        },
    },

    created() {
        this.createdComponent();
    },

    destroyed() {
        this.destroyedComponent();
    },

    methods: {
        createdComponent() {
            this.registerEvents();

            if (this.index === 0 && this.column === 0) {
                this.isActive = true;
            }
        },

        destroyedComponent() {
            this.removeEvents();
        },

        registerEvents() {
            this.$parent.$on('active-item-index-select', this.checkActiveState);
            this.$parent.$on('keyup-enter', this.onEnter);
        },

        removeEvents() {
            this.$parent.$off('active-item-index-select', this.checkActiveState);
            this.$parent.$off('keyup-enter', this.onEnter);
        },

        checkActiveState({ index, column }) {
            if (index === this.index && column === this.column) {
                this.isActive = true;
                return;
            }

            if (this.isActive) {
                this.isActive = false;
            }
        },

        onEnter(index, column) {
            if (index !== this.index || column !== this.column) {
                return;
            }

            const routerLink = this.$refs.routerLink;
            this.$router.push(routerLink.to);
        },

        onMouseEnter(originalDomEvent) {
            this.$parent.$emit('mouse-over', {
                originalDomEvent,
                index: this.index,
                column: this.column,
            });
            this.isActive = true;
        },
    },
});
