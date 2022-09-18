import DiscountVendor from './components/DiscountVendor'
import Vue from 'vue';

Vue.component('discount-vendor-component', DiscountVendor);

/**
 * This let us access the `__` method for localization in VueJS templates
 * ({{ __('key') }})
 */
Vue.prototype.__ = key => {
    return _.get(window.trans, key, key);
};

new Vue({
    el: '#main-discount',
});
