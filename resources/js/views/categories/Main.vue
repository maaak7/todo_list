<template>
    <div class="container">
        <router-view/>
    </div>
</template>

<script>
    // import {mapGetters} from 'vuex';
    // import Alerts from '@/js/components/alerts/index';
    // import BreadCrumbs from '@/js/components/Breadcrumbs/index';
    // import {main} from '@/js/mixins/main-mixin';
    // import {alerts} from '@/js/mixins/alerts-mixin';
    //
    export default {
        mounted() {
            console.log('categories');
        }
        //     mixins: [alerts, main],
        //     components: {
        //         Alerts,
        //         BreadCrumbs
        //     },
        //
        //     computed: {
        //         ...mapGetters({alertBlocks: 'alerts/ALERT_BLOCKS'}),
        //         ...mapGetters({breadcrumbs: 'breadcrumbs/BREADCRUMBS'}),
        //         ...mapGetters({currentPage: 'roles/CURRENT_PAGE'}),
        //
        //         currentPageTitle() {
        //             const titles = {
        //                 list: this.$t('roles.roles_list'),
        //                 add: this.$t('roles.role_creating'),
        //                 edit: this.$t('roles.role_editing'),
        //             };
        //             const page = this.currentPage;
        //
        //             return titles[page] ? titles[page] : this.$t('roles.roles_list');
        //         }
        //     },
        //
        //     methods: {
        //         goToCreatePage: function () {
        //             this.$router.push({name: 'add_role'});
        //         },
        //     }
    }
</script>

<style scoped>
    .container {
        padding: 15px;
    }
</style>
