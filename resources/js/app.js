
/**
 * 首先，我们将加载该项目的所有JavaScript依赖项，包括Vue和其他库。
 * 使用VUE和Laravel构建健壮、强大的Web应用程序是一个很好的起点。
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * 下面的代码块可以用来自动注册您的VUE组件。
 * 它将递归地扫描这个目录以寻找Vue组件，
 * 并自动将它们注册为“basename”。
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key)))

/**
 * 接下来，我们将创建一个新的VUE应用实例并将其附加到页面。
 * 然后，您可以开始向该应用程序添加组件，或者定制JavaScript框架以满足您的独特需求。
 */

const app = new Vue({
    el: '#app'
});
