<template>
    <div aria-live="polite" aria-atomic="true" class="bootstrap-toast" :class="toast ? 'show-toast' : ''">
        <div class="toast" style="opacity: 1 !important; position: absolute; top: 0; right: 0;">
            <div class="toast-header">
                <strong class="mr-auto">System</strong>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="toast-body">{{ text }}</div>
        </div>
    </div>
</template>

<script>
    import {mapGetters} from 'vuex';

    export default {
        data() {
            return {
                text: ''
            }
        },

        watch: {
            toast: {
                immediate: true,
                handler(data) {
                    this.text = data;
                },
                deep: true
            }
        },

        computed: {
            ...mapGetters({toast: 'toastsStore/TOAST'}),
        }
    }
</script>

<style>
    .bootstrap-toast {
        display: none;
        position: absolute;
        top: 10px;
        right: calc(50% - 135px);
    }

    .bootstrap-toast .toast {
        width: 275px;
        background-color: #fff;
    }

    .show-toast {
        display: block !important;
    }
</style>
