<<<<<<< HEAD
window.yoast=window.yoast||{},window.yoast.redux=function(e){var t={};function n(r){if(t[r])return t[r].exports;var o=t[r]={i:r,l:!1,exports:{}};return e[r].call(o.exports,o,o.exports,n),o.l=!0,o.exports}return n.m=e,n.c=t,n.d=function(e,t,r){n.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:r})},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n.t=function(e,t){if(1&t&&(e=n(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var r=Object.create(null);if(n.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var o in e)n.d(r,o,function(t){return e[t]}.bind(null,o));return r},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="",n(n.s=491)}({105:function(e,t){e.exports=window.lodash.isPlainObject},131:function(e,t,n){"use strict";(function(e,r){var o,i=n(223);o="undefined"!=typeof self?self:"undefined"!=typeof window?window:void 0!==e?e:r;var u=Object(i.a)(o);t.a=u}).call(this,n(22),n(427)(e))},22:function(e,t){var n;n=function(){return this}();try{n=n||new Function("return this")()}catch(e){"object"==typeof window&&(n=window)}e.exports=n},223:function(e,t,n){"use strict";function r(e){var t,n=e.Symbol;return"function"==typeof n?n.observable?t=n.observable:(t=n("observable"),n.observable=t):t="@@observable",t}n.d(t,"a",(function(){return r}))},427:function(e,t){e.exports=function(e){if(!e.webpackPolyfill){var t=Object.create(e);t.children||(t.children=[]),Object.defineProperty(t,"loaded",{enumerable:!0,get:function(){return t.l}}),Object.defineProperty(t,"id",{enumerable:!0,get:function(){return t.i}}),Object.defineProperty(t,"exports",{enumerable:!0}),t.webpackPolyfill=1}return t}},491:function(e,t,n){"use strict";n.r(t),n.d(t,"createStore",(function(){return u})),n.d(t,"combineReducers",(function(){return a})),n.d(t,"bindActionCreators",(function(){return d})),n.d(t,"applyMiddleware",(function(){return p})),n.d(t,"compose",(function(){return s}));var r=n(105),o=n.n(r),i=n(131);function u(e,t,n){var r;if("function"==typeof t&&void 0===n&&(n=t,t=void 0),void 0!==n){if("function"!=typeof n)throw new Error("Expected the enhancer to be a function.");return n(u)(e,t)}if("function"!=typeof e)throw new Error("Expected the reducer to be a function.");var c=e,a=t,f=[],d=f,s=!1;function l(){d===f&&(d=f.slice())}function p(){return a}function y(e){if("function"!=typeof e)throw new Error("Expected listener to be a function.");var t=!0;return l(),d.push(e),function(){if(t){t=!1,l();var n=d.indexOf(e);d.splice(n,1)}}}function b(e){if(!o()(e))throw new Error("Actions must be plain objects. Use custom middleware for async actions.");if(void 0===e.type)throw new Error('Actions may not have an undefined "type" property. Have you misspelled a constant?');if(s)throw new Error("Reducers may not dispatch actions.");try{s=!0,a=c(a,e)}finally{s=!1}for(var t=f=d,n=0;n<t.length;n++)(0,t[n])();return e}return b({type:"@@redux/INIT"}),(r={dispatch:b,subscribe:y,getState:p,replaceReducer:function(e){if("function"!=typeof e)throw new Error("Expected the nextReducer to be a function.");c=e,b({type:"@@redux/INIT"})}})[i.a]=function(){var e,t=y;return(e={subscribe:function(e){if("object"!=typeof e)throw new TypeError("Expected the observer to be an object.");function n(){e.next&&e.next(p())}return n(),{unsubscribe:t(n)}}})[i.a]=function(){return this},e},r}function c(e,t){var n=t&&t.type;return"Given action "+(n&&'"'+n.toString()+'"'||"an action")+', reducer "'+e+'" returned undefined. To ignore an action, you must explicitly return the previous state. If you want this reducer to hold no value, you can return null instead of undefined.'}function a(e){for(var t=Object.keys(e),n={},r=0;r<t.length;r++){var o=t[r];"function"==typeof e[o]&&(n[o]=e[o])}var i=Object.keys(n),u=void 0;try{!function(e){Object.keys(e).forEach((function(t){var n=e[t];if(void 0===n(void 0,{type:"@@redux/INIT"}))throw new Error('Reducer "'+t+"\" returned undefined during initialization. If the state passed to the reducer is undefined, you must explicitly return the initial state. The initial state may not be undefined. If you don't want to set a value for this reducer, you can use null instead of undefined.");if(void 0===n(void 0,{type:"@@redux/PROBE_UNKNOWN_ACTION_"+Math.random().toString(36).substring(7).split("").join(".")}))throw new Error('Reducer "'+t+'" returned undefined when probed with a random type. Don\'t try to handle @@redux/INIT or other actions in "redux/*" namespace. They are considered private. Instead, you must return the current state for any unknown actions, unless it is undefined, in which case you must return the initial state, regardless of the action type. The initial state may not be undefined, but can be null.')}))}(n)}catch(e){u=e}return function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{},t=arguments[1];if(u)throw u;for(var r=!1,o={},a=0;a<i.length;a++){var f=i[a],d=n[f],s=e[f],l=d(s,t);if(void 0===l){var p=c(f,t);throw new Error(p)}o[f]=l,r=r||l!==s}return r?o:e}}function f(e,t){return function(){return t(e.apply(void 0,arguments))}}function d(e,t){if("function"==typeof e)return f(e,t);if("object"!=typeof e||null===e)throw new Error("bindActionCreators expected an object or a function, instead received "+(null===e?"null":typeof e)+'. Did you write "import ActionCreators from" instead of "import * as ActionCreators from"?');for(var n=Object.keys(e),r={},o=0;o<n.length;o++){var i=n[o],u=e[i];"function"==typeof u&&(r[i]=f(u,t))}return r}function s(){for(var e=arguments.length,t=Array(e),n=0;n<e;n++)t[n]=arguments[n];return 0===t.length?function(e){return e}:1===t.length?t[0]:t.reduce((function(e,t){return function(){return e(t.apply(void 0,arguments))}}))}var l=Object.assign||function(e){for(var t=1;t<arguments.length;t++){var n=arguments[t];for(var r in n)Object.prototype.hasOwnProperty.call(n,r)&&(e[r]=n[r])}return e};function p(){for(var e=arguments.length,t=Array(e),n=0;n<e;n++)t[n]=arguments[n];return function(e){return function(n,r,o){var i,u=e(n,r,o),c=u.dispatch,a={getState:u.getState,dispatch:function(e){return c(e)}};return i=t.map((function(e){return e(a)})),c=s.apply(void 0,i)(u.dispatch),l({},u,{dispatch:c})}}}}});
=======
window.yoast=window.yoast||{},window.yoast.redux=function(e){var t={};function n(r){if(t[r])return t[r].exports;var o=t[r]={i:r,l:!1,exports:{}};return e[r].call(o.exports,o,o.exports,n),o.l=!0,o.exports}return n.m=e,n.c=t,n.d=function(e,t,r){n.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:r})},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n.t=function(e,t){if(1&t&&(e=n(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var r=Object.create(null);if(n.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var o in e)n.d(r,o,function(t){return e[t]}.bind(null,o));return r},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="",n(n.s=404)}({108:function(e,t,n){"use strict";(function(e,r){var o,i=n(191);o="undefined"!=typeof self?self:"undefined"!=typeof window?window:void 0!==e?e:r;var u=Object(i.a)(o);t.a=u}).call(this,n(20),n(321)(e))},191:function(e,t,n){"use strict";function r(e){var t,n=e.Symbol;return"function"==typeof n?n.observable?t=n.observable:(t=n("observable"),n.observable=t):t="@@observable",t}n.d(t,"a",(function(){return r}))},20:function(e,t){var n;n=function(){return this}();try{n=n||new Function("return this")()}catch(e){"object"==typeof window&&(n=window)}e.exports=n},321:function(e,t){e.exports=function(e){if(!e.webpackPolyfill){var t=Object.create(e);t.children||(t.children=[]),Object.defineProperty(t,"loaded",{enumerable:!0,get:function(){return t.l}}),Object.defineProperty(t,"id",{enumerable:!0,get:function(){return t.i}}),Object.defineProperty(t,"exports",{enumerable:!0}),t.webpackPolyfill=1}return t}},404:function(e,t,n){"use strict";n.r(t),n.d(t,"createStore",(function(){return u})),n.d(t,"combineReducers",(function(){return a})),n.d(t,"bindActionCreators",(function(){return d})),n.d(t,"applyMiddleware",(function(){return p})),n.d(t,"compose",(function(){return s}));var r=n(87),o=n.n(r),i=n(108);function u(e,t,n){var r;if("function"==typeof t&&void 0===n&&(n=t,t=void 0),void 0!==n){if("function"!=typeof n)throw new Error("Expected the enhancer to be a function.");return n(u)(e,t)}if("function"!=typeof e)throw new Error("Expected the reducer to be a function.");var c=e,a=t,f=[],d=f,s=!1;function l(){d===f&&(d=f.slice())}function p(){return a}function y(e){if("function"!=typeof e)throw new Error("Expected listener to be a function.");var t=!0;return l(),d.push(e),function(){if(t){t=!1,l();var n=d.indexOf(e);d.splice(n,1)}}}function b(e){if(!o()(e))throw new Error("Actions must be plain objects. Use custom middleware for async actions.");if(void 0===e.type)throw new Error('Actions may not have an undefined "type" property. Have you misspelled a constant?');if(s)throw new Error("Reducers may not dispatch actions.");try{s=!0,a=c(a,e)}finally{s=!1}for(var t=f=d,n=0;n<t.length;n++)(0,t[n])();return e}return b({type:"@@redux/INIT"}),(r={dispatch:b,subscribe:y,getState:p,replaceReducer:function(e){if("function"!=typeof e)throw new Error("Expected the nextReducer to be a function.");c=e,b({type:"@@redux/INIT"})}})[i.a]=function(){var e,t=y;return(e={subscribe:function(e){if("object"!=typeof e)throw new TypeError("Expected the observer to be an object.");function n(){e.next&&e.next(p())}return n(),{unsubscribe:t(n)}}})[i.a]=function(){return this},e},r}function c(e,t){var n=t&&t.type;return"Given action "+(n&&'"'+n.toString()+'"'||"an action")+', reducer "'+e+'" returned undefined. To ignore an action, you must explicitly return the previous state. If you want this reducer to hold no value, you can return null instead of undefined.'}function a(e){for(var t=Object.keys(e),n={},r=0;r<t.length;r++){var o=t[r];"function"==typeof e[o]&&(n[o]=e[o])}var i=Object.keys(n),u=void 0;try{!function(e){Object.keys(e).forEach((function(t){var n=e[t];if(void 0===n(void 0,{type:"@@redux/INIT"}))throw new Error('Reducer "'+t+"\" returned undefined during initialization. If the state passed to the reducer is undefined, you must explicitly return the initial state. The initial state may not be undefined. If you don't want to set a value for this reducer, you can use null instead of undefined.");if(void 0===n(void 0,{type:"@@redux/PROBE_UNKNOWN_ACTION_"+Math.random().toString(36).substring(7).split("").join(".")}))throw new Error('Reducer "'+t+'" returned undefined when probed with a random type. Don\'t try to handle @@redux/INIT or other actions in "redux/*" namespace. They are considered private. Instead, you must return the current state for any unknown actions, unless it is undefined, in which case you must return the initial state, regardless of the action type. The initial state may not be undefined, but can be null.')}))}(n)}catch(e){u=e}return function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{},t=arguments[1];if(u)throw u;for(var r=!1,o={},a=0;a<i.length;a++){var f=i[a],d=n[f],s=e[f],l=d(s,t);if(void 0===l){var p=c(f,t);throw new Error(p)}o[f]=l,r=r||l!==s}return r?o:e}}function f(e,t){return function(){return t(e.apply(void 0,arguments))}}function d(e,t){if("function"==typeof e)return f(e,t);if("object"!=typeof e||null===e)throw new Error("bindActionCreators expected an object or a function, instead received "+(null===e?"null":typeof e)+'. Did you write "import ActionCreators from" instead of "import * as ActionCreators from"?');for(var n=Object.keys(e),r={},o=0;o<n.length;o++){var i=n[o],u=e[i];"function"==typeof u&&(r[i]=f(u,t))}return r}function s(){for(var e=arguments.length,t=Array(e),n=0;n<e;n++)t[n]=arguments[n];return 0===t.length?function(e){return e}:1===t.length?t[0]:t.reduce((function(e,t){return function(){return e(t.apply(void 0,arguments))}}))}var l=Object.assign||function(e){for(var t=1;t<arguments.length;t++){var n=arguments[t];for(var r in n)Object.prototype.hasOwnProperty.call(n,r)&&(e[r]=n[r])}return e};function p(){for(var e=arguments.length,t=Array(e),n=0;n<e;n++)t[n]=arguments[n];return function(e){return function(n,r,o){var i,u=e(n,r,o),c=u.dispatch,a={getState:u.getState,dispatch:function(e){return c(e)}};return i=t.map((function(e){return e(a)})),c=s.apply(void 0,i)(u.dispatch),l({},u,{dispatch:c})}}}},87:function(e,t){e.exports=window.lodash.isPlainObject}});
>>>>>>> update
