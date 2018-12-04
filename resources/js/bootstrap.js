
window._ = require('lodash');

/**
 * 我们将加载jQuery和Bootstrap jQuery插件，
 * 该插件提供对基于JavaScript的引导特性（如模态和选项卡）的支持。
 * 可以修改此代码以满足应用程序的特定需求。
 */

try {
    window.Popper = require('popper.js').default;
    window.$ = window.jQuery = require('jquery');

    require('bootstrap');
} catch (e) {}

/**
 * 我们将加载axios HTTP库，它允许我们轻松地向Laravel后端发出请求。
 * 该库基于“XSRF”令牌cookie的值自动处理将CSRF令牌作为报头发送。
 */

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * 接下来，我们将用Axios将CSRF令牌注册为一个公共头，
 * 以便所有传出的HTTP请求自动附加它。
 * 这只是一个简单的方便，所以我们不必手动连接每个令牌。
 */

let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}

/**
 * Echo公开了用于订阅频道和侦听Laravel广播的事件的表达性API。
 * 回声和事件广播使您的团队能够轻松构建健壮的实时Web应用程序。
 */

// import Echo from 'laravel-echo'

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     encrypted: true
// });
