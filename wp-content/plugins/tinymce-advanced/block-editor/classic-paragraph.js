<<<<<<< HEAD
!function(e){var t={};function o(r){if(t[r])return t[r].exports;var n=t[r]={i:r,l:!1,exports:{}};return e[r].call(n.exports,n,n.exports,o),n.l=!0,n.exports}o.m=e,o.c=t,o.d=function(e,t,r){o.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:r})},o.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},o.t=function(e,t){if(1&t&&(e=o(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var r=Object.create(null);if(o.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var n in e)o.d(r,n,function(t){return e[t]}.bind(null,n));return r},o.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return o.d(t,"a",t),t},o.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},o.p="",o(o.s=1)}([,function(e,t,o){"use strict";o.r(t);const{wp:r}=window,{debounce:n}=window._,c=window.tadvBlockRegister,{BlockControls:a,useBlockProps:i}=r.blockEditor,{ToolbarGroup:s}=r.components,{Component:l,createElement:d,Fragment:u,useEffect:p,useRef:m}=r.element,{BACKSPACE:b,DELETE:f,F10:g,isKeyboardEvent:k}=r.keycodes;const{RawHTML:y,createElement:h}=wp.element;const{join:v,split:w,create:_,toHTMLString:B}=wp.richText,{createBlock:C,getBlockContent:E}=wp.blocks;var P={from:(()=>{const e=[];return["core-embed/twitter","core-embed/youtube","core-embed/facebook","core-embed/instagram","core-embed/wordpress","core-embed/soundcloud","core-embed/spotify","core-embed/flickr","core-embed/vimeo","core-embed/animoto","core-embed/cloudup","core-embed/collegehumor","core-embed/crowdsignal","core-embed/dailymotion","core-embed/hulu","core-embed/imgur","core-embed/issuu","core-embed/kickstarter","core-embed/meetup-com","core-embed/mixcloud","core-embed/polldaddy","core-embed/reddit","core-embed/reverbnation","core-embed/screencast","core-embed/scribd","core-embed/slideshare","core-embed/smugmug","core-embed/speaker","core-embed/speaker-deck","core-embed/ted","core-embed/tumblr","core-embed/videopress","core-embed/wordpress-tv","core-embed/amazon-kindle"].forEach(t=>{e.push({type:"block",blocks:[t],transform:e=>{if(!e.url)return C("tadv/classic-paragraph",{content:""});const o=E(C(t,e));let r,n="<p>"+e.url+"</p>";return o&&o.indexOf("</figcaption>")>-1&&o.replace(/<figcaption[^>]*>([\s\S]*?)<\/figcaption>/,(function(e,t){r=t})),n+=r?"<p>"+r+"</p>":'<p><br data-mce-bogus="1"></p>',C("tadv/classic-paragraph",{content:n})}})}),["core/paragraph","core/image","core/heading","core/gallery","core/list","core/quote","core/code","core/columns","core/freeform","core/html","core/media-text","core/missing","core/preformatted","core/pullquote","core/subhead","core/table","core/text-columns","core/verse"].forEach(t=>{e.push({type:"block",blocks:[t],transform:e=>{let o=E(C(t,e));return(!o||o.indexOf("</div>")>-1)&&(o+='<p><br data-mce-bogus="1"></p>'),C("tadv/classic-paragraph",{content:o})}})}),e.push({type:"raw",priority:21,isMatch:()=>!0},{type:"block",isMultiBlock:!0,blocks:["core/paragraph"],transform:e=>{const t=B({value:v(e.map(({content:e})=>_({html:e})),"\u2028"),multilineTag:"p"});return C("tadv/classic-paragraph",{content:t})}},{type:"block",isMultiBlock:!0,blocks:["tadv/classic-paragraph"],transform:e=>{const t=B({value:v(e.map(({content:e})=>_({html:e})),"\u2028")});return C("tadv/classic-paragraph",{content:t})}},{type:"block",isMultiBlock:!0,blocks:["core/freeform"],transform:e=>{const t=B({value:v(e.map(({content:e})=>_({html:e})),"\u2028")});return C("tadv/classic-paragraph",{content:t})}}),e})(),to:[{type:"block",blocks:["core/freeform"],transform:e=>C("core/freeform",e)},{type:"block",blocks:["core/html"],transform:e=>C("core/html",e)}]};const{__:x}=wp.i18n,T=window.tadvBlockRegister,{name:M,attributes:S,category:L}={name:"tadv/classic-paragraph",category:"common",attributes:{content:{type:"string",source:"html"},align:{type:"string"}}};var N={name:M,attributes:S,category:L,title:T.classicParagraphTitle,description:T.description,keywords:[x("text")],icon:"welcome-widgets-menus",supports:{className:!1,customClassName:!1,reusable:!0},merge:(e,t)=>({content:(e.content||"")+(t.content||"")}),transforms:P,edit:function({clientId:e,attributes:{content:t},setAttributes:o,onReplace:a}){const s=m(!1);return p(()=>{if(!s.current)return;const o=window.tinymce.get(`editor-${e}`);let r;o&&(r=o.getContent()),r!==t&&o.setContent(t||"")},[t]),p(()=>{const{baseURL:c,suffix:i}=window.wpEditorL10n.tinymce;function l(e){let r;t&&e.on("loadContent",()=>e.setContent(t)),e.on("blur",()=>{r=e.selection.getBookmark(2,!0);const t=document.querySelector(".interface-interface-skeleton__content"),n=t.scrollTop;return o({content:e.getContent()}),e.once("focus",()=>{r&&(e.selection.moveToBookmark(r),t.scrollTop!==n&&(t.scrollTop=n))}),!1}),e.on("mousedown touchstart",()=>{r=null});const c=n(()=>{const t=e.getContent();t!==e._lastChange&&(e._lastChange=t,o({content:t}))},250);e.on("Paste Change input Undo Redo",c),e.on("remove",c.cancel),e.on("keydown",t=>{k.primary(t,"z")&&t.stopPropagation(),t.keyCode!==b&&t.keyCode!==f||!function(e){const t=e.getBody();return!(t.childNodes.length>1)&&(0===t.childNodes.length||!(t.childNodes[0].childNodes.length>1)&&/^\n?$/.test(t.innerText||t.textContent))}(e)||(a([]),t.preventDefault(),t.stopImmediatePropagation());const{altKey:o}=t;o&&t.keyCode===g&&t.stopPropagation()}),e.on("init",()=>{const t=e.getBody();t.ownerDocument.activeElement===t&&(t.blur(),e.focus())})}function d(){const{settings:t}=window.wpEditorL10n.tinymce;r.oldEditor.initialize(`editor-${e}`,{tinymce:{...t,inline:!0,content_css:!1,fixed_toolbar_container:`#toolbar-${e}`,setup:l}})}function u(){"complete"===document.readyState&&d()}return s.current=!0,window.tinymce.EditorManager.overrideDefaults({base_url:c,suffix:i}),"complete"===document.readyState?d():document.addEventListener("readystatechange",u),()=>{document.removeEventListener("readystatechange",u),r.oldEditor.remove(`editor-${e}`)}},[]),d("div",i(),d("div",{key:"toolbar",id:`toolbar-${e}`,className:"block-library-classic__toolbar tma-classic-paragraph__toolbar",onClick:function(){const t=window.tinymce.get(`editor-${e}`);t&&t.focus()},"data-placeholder":c.classicParagraphTitle,onKeyDown:function(e){e.stopPropagation(),e.nativeEvent.stopImmediatePropagation()}}),d("div",{key:"editor",id:`editor-${e}`,className:"wp-block-freeform block-library-rich-text__tinymce tma-classic-paragraph"}))},save:function({attributes:e}){const{content:t}=e;return h(y,null,t)}};const{dispatch:O,select:j}=wp.data,{createBlock:R,rawHandler:$}=wp.blocks;var D=function(){const e=j("core/block-editor").getSelectedBlock();let t;if(e){let o=e.attributes.content;o?(/<p data-tadv-p="keep">/.test(o)&&(o=o.replace(/<p data-tadv-p="keep">/g,"<p>")),t=$({HTML:o})):t=R("core/paragraph"),O("core/block-editor").replaceBlocks(e.clientId,t)}};!function(){const e=window.wp,t=window.tadvBlockRegister;if(!e||!t)return;const{createElement:o}=e.element,{__:r}=e.i18n,{addFilter:n}=e.hooks,{PluginBlockSettingsMenuItem:c}=e.editPost,{registerPlugin:a}=e.plugins,{registerBlockType:i,setDefaultBlockName:s}=e.blocks;t.classicParagraph?(i("tadv/classic-paragraph",N),a("tadv-add-submenu",{render:()=>(t.hybridMode&&s("tadv/classic-paragraph"),o(c,{allowedBlocks:["tadv/classic-paragraph"],icon:"screenoptions",label:r("Convert to Blocks"),onClick:D}))})):t.hybridMode&&a("tadv-set-default-block",{render:()=>(s("core/freeform"),null)})}()}]);
=======
!function(e){var t={};function o(r){if(t[r])return t[r].exports;var n=t[r]={i:r,l:!1,exports:{}};return e[r].call(n.exports,n,n.exports,o),n.l=!0,n.exports}o.m=e,o.c=t,o.d=function(e,t,r){o.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:r})},o.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},o.t=function(e,t){if(1&t&&(e=o(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var r=Object.create(null);if(o.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var n in e)o.d(r,n,function(t){return e[t]}.bind(null,n));return r},o.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return o.d(t,"a",t),t},o.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},o.p="",o(o.s=0)}([function(e,t,o){"use strict";o.r(t);const{wp:r}=window,{debounce:n}=window._,c=window.tadvBlockRegister,{BlockControls:a,useBlockProps:i}=r.blockEditor,{ToolbarGroup:s}=r.components,{Component:l,createElement:d,Fragment:u,useEffect:p,useRef:m}=r.element,{BACKSPACE:b,DELETE:f,F10:g,isKeyboardEvent:k}=r.keycodes;const{RawHTML:y,createElement:h}=wp.element;const{join:v,split:w,create:_,toHTMLString:B}=wp.richText,{createBlock:C,getBlockContent:E}=wp.blocks;var x={from:(()=>{const e=[];return["core-embed/twitter","core-embed/youtube","core-embed/facebook","core-embed/instagram","core-embed/wordpress","core-embed/soundcloud","core-embed/spotify","core-embed/flickr","core-embed/vimeo","core-embed/animoto","core-embed/cloudup","core-embed/collegehumor","core-embed/crowdsignal","core-embed/dailymotion","core-embed/hulu","core-embed/imgur","core-embed/issuu","core-embed/kickstarter","core-embed/meetup-com","core-embed/mixcloud","core-embed/polldaddy","core-embed/reddit","core-embed/reverbnation","core-embed/screencast","core-embed/scribd","core-embed/slideshare","core-embed/smugmug","core-embed/speaker","core-embed/speaker-deck","core-embed/ted","core-embed/tumblr","core-embed/videopress","core-embed/wordpress-tv","core-embed/amazon-kindle"].forEach(t=>{e.push({type:"block",blocks:[t],transform:e=>{if(!e.url)return C("tadv/classic-paragraph",{content:""});const o=E(C(t,e));let r,n="<p>"+e.url+"</p>";return o&&o.indexOf("</figcaption>")>-1&&o.replace(/<figcaption[^>]*>([\s\S]*?)<\/figcaption>/,(function(e,t){r=t})),n+=r?"<p>"+r+"</p>":'<p><br data-mce-bogus="1"></p>',C("tadv/classic-paragraph",{content:n})}})}),["core/paragraph","core/image","core/heading","core/gallery","core/list","core/quote","core/code","core/columns","core/freeform","core/html","core/media-text","core/missing","core/preformatted","core/pullquote","core/subhead","core/table","core/text-columns","core/verse"].forEach(t=>{e.push({type:"block",blocks:[t],transform:e=>{let o=E(C(t,e));return(!o||o.indexOf("</div>")>-1)&&(o+='<p><br data-mce-bogus="1"></p>'),C("tadv/classic-paragraph",{content:o})}})}),e.push({type:"raw",priority:21,isMatch:()=>!0},{type:"block",isMultiBlock:!0,blocks:["core/paragraph"],transform:e=>{const t=B({value:v(e.map(({content:e})=>_({html:e})),"\u2028"),multilineTag:"p"});return C("tadv/classic-paragraph",{content:t})}},{type:"block",isMultiBlock:!0,blocks:["core/freeform"],transform:e=>{const t=B({value:v(e.map(({content:e})=>_({html:e})),"\u2028")});return C("tadv/classic-paragraph",{content:t})}}),e})(),to:[{type:"block",blocks:["core/freeform"],transform:e=>C("core/freeform",e)},{type:"block",blocks:["core/html"],transform:e=>C("core/html",e)}]};const{__:P}=wp.i18n,T=window.tadvBlockRegister,{name:M,attributes:S,category:L}={name:"tadv/classic-paragraph",category:"common",attributes:{content:{type:"string",source:"html"},align:{type:"string"}}};var N={name:M,attributes:S,category:L,title:T.classicParagraphTitle,description:T.description,keywords:[P("text")],icon:"welcome-widgets-menus",supports:{className:!1,customClassName:!1,reusable:!0},example:{attributes:{content:"<p>"+P("Welcome to the wonderful world of blocks…")+"</p>"}},merge:(e,t)=>({content:(e.content||"")+(t.content||"")}),transforms:x,edit:function({clientId:e,attributes:{content:t},setAttributes:o,onReplace:a}){const s=m(!1);return p(()=>{if(!s.current)return;const o=window.tinymce.get(`editor-${e}`);let r;o&&(r=o.getContent()),r!==t&&o.setContent(t||"")},[t]),p(()=>{const{baseURL:c,suffix:i}=window.wpEditorL10n.tinymce;function l(e){let r;t&&e.on("loadContent",()=>e.setContent(t)),e.on("blur",()=>{r=e.selection.getBookmark(2,!0);const t=document.querySelector(".interface-interface-skeleton__content"),n=t.scrollTop;return o({content:e.getContent()}),e.once("focus",()=>{r&&(e.selection.moveToBookmark(r),t.scrollTop!==n&&(t.scrollTop=n))}),!1}),e.on("mousedown touchstart",()=>{r=null});const c=n(()=>{const t=e.getContent();t!==e._lastChange&&(e._lastChange=t,o({content:t}))},250);e.on("Paste Change input Undo Redo",c),e.on("remove",c.cancel),e.on("keydown",t=>{k.primary(t,"z")&&t.stopPropagation(),t.keyCode!==b&&t.keyCode!==f||!function(e){const t=e.getBody();return!(t.childNodes.length>1)&&(0===t.childNodes.length||!(t.childNodes[0].childNodes.length>1)&&/^\n?$/.test(t.innerText||t.textContent))}(e)||(a([]),t.preventDefault(),t.stopImmediatePropagation());const{altKey:o}=t;o&&t.keyCode===g&&t.stopPropagation()}),e.on("init",()=>{const t=e.getBody();t.ownerDocument.activeElement===t&&(t.blur(),e.focus())})}function d(){const{settings:t}=window.wpEditorL10n.tinymce;r.oldEditor.initialize(`editor-${e}`,{tinymce:{...t,inline:!0,content_css:!1,fixed_toolbar_container:`#toolbar-${e}`,setup:l}})}function u(){"complete"===document.readyState&&d()}return s.current=!0,window.tinymce.EditorManager.overrideDefaults({base_url:c,suffix:i}),"complete"===document.readyState?d():document.addEventListener("readystatechange",u),()=>{document.removeEventListener("readystatechange",u),r.oldEditor.remove(`editor-${e}`)}},[]),d("div",i(),d("div",{key:"toolbar",id:`toolbar-${e}`,className:"block-library-classic__toolbar tma-classic-paragraph__toolbar",onClick:function(){const t=window.tinymce.get(`editor-${e}`);t&&t.focus()},"data-placeholder":c.classicParagraphTitle,onKeyDown:function(e){e.stopPropagation(),e.nativeEvent.stopImmediatePropagation()}}),d("div",{key:"editor",id:`editor-${e}`,className:"wp-block-freeform block-library-rich-text__tinymce tma-classic-paragraph"}))},save:function({attributes:e}){const{content:t}=e;return h(y,null,t)}};const{dispatch:O,select:j}=wp.data,{createBlock:R,rawHandler:$}=wp.blocks;var D=function(){const e=j("core/block-editor").getSelectedBlock();let t;if(e){let o=e.attributes.content;o?(/<p data-tadv-p="keep">/.test(o)&&(o=o.replace(/<p data-tadv-p="keep">/g,"<p>")),t=$({HTML:o})):t=R("core/paragraph"),O("core/block-editor").replaceBlocks(e.clientId,t)}};!function(){const e=window.wp,t=window.tadvBlockRegister;if(!e||!t)return;const{createElement:o}=e.element,{__:r}=e.i18n,{addFilter:n}=e.hooks,{PluginBlockSettingsMenuItem:c}=e.editPost,{registerPlugin:a}=e.plugins,{registerBlockType:i,setDefaultBlockName:s}=e.blocks;t.classicParagraph?(i("tadv/classic-paragraph",N),a("tadv-add-submenu",{render:()=>(t.hybridMode&&s("tadv/classic-paragraph"),o(c,{allowedBlocks:["tadv/classic-paragraph"],icon:"screenoptions",label:r("Convert to Blocks"),onClick:D}))})):t.hybridMode&&a("tadv-set-default-block",{render:()=>(s("core/freeform"),null)})}()}]);
>>>>>>> update
