(this["webpackJsonpsorting-visualizer"]=this["webpackJsonpsorting-visualizer"]||[]).push([[0],{26:function(e,t,a){e.exports=a(38)},31:function(e,t,a){},34:function(e,t,a){},37:function(e,t,a){},38:function(e,t,a){"use strict";a.r(t);var n=a(0),r=a.n(n),o=a(9),s=a.n(o),i=(a(31),a(7)),u=a(16),l=a(17),c=a(24),m=a(18),h=a(25),f=a(12),E=a(21),v=a(11),g=a(20),d=a(8),A=a(23),y=a(19),S=a.n(y);function N(e){var t=[];if(e.length<=1)return e;var a=e.slice();return function e(t,a,n,r,o){if(a===n)return;var s=Math.floor((a+n)/2);e(r,a,s,t,o);e(r,s+1,n,t,o);!function(e,t,a,n,r,o){var s=t,i=t,u=a+1;for(;i<=a&&u<=n;)o.push([i,u]),o.push([i,u]),r[i]<=r[u]?(o.push([s,r[i]]),e[s++]=r[i++]):(o.push([s,r[u]]),e[s++]=r[u++]);for(;i<=a;)o.push([i,i]),o.push([i,i]),o.push([s,r[i]]),e[s++]=r[i++];for(;u<=n;)o.push([u,u]),o.push([u,u]),o.push([s,r[u]]),e[s++]=r[u++]}(t,a,s,n,r,o)}(e,0,e.length-1,a,t),t}function p(e){var t=[];return e.length<=1?e:(function(e,t){for(var a=0,n=0;n<e.length-1;++n)for(var r=0;r<e.length-n-1;++r)e[r]>e[r+1]&&(t.push([r,r+1]),t.push([r,r+1]),a=e[r],e[r]=e[r+1],e[r+1]=a,t.push([r,e[r]]),t.push([r+1,e[r+1]]));console.log(e)}(e,t),t)}a(34);var b=function(e){function t(e){var a;return Object(u.a)(this,t),(a=Object(c.a)(this,Object(m.a)(t).call(this,e))).state={array:[],sliderCoords:{x:.3},NUMBER_OF_ARRAY_BARS:50,ANIMATION_SPEED_MS:5},a}return Object(h.a)(t,e),Object(l.a)(t,[{key:"componentDidMount",value:function(){this.resetArray()}},{key:"resetArray",value:function(){for(var e=[],t=0;t<this.state.NUMBER_OF_ARRAY_BARS;t++)e.push(_(5,500));this.setState({array:e})}},{key:"mergeSort",value:function(){for(var e=this,t=N(this.state.array),a=document.getElementsByClassName("array-bar"),n=0,r=function(n){if(n%3!==2){var r=Object(i.a)(t[n],2),o=r[0],s=r[1],u=a[o].style,l=a[s].style,c=n%3===0?"red":"turquoise";setTimeout((function(){u.backgroundColor=c,l.backgroundColor=c}),n*e.state.ANIMATION_SPEED_MS)}else setTimeout((function(){var e=Object(i.a)(t[n],2),r=e[0],o=e[1];a[r].style.height="".concat(o,"px")}),n*e.state.ANIMATION_SPEED_MS)},o=n;o<t.length;n++,o++)r(o);this.sortingCompletedAnimation(n*this.state.ANIMATION_SPEED_MS)}},{key:"traversal",value:function(){var e=this,t=function(e,t){var a=[];return function(e,t,a){for(var n=0;n<e.length;++n)t.push([n,n]),t.push([n,n]),t.push([n,a])}(e,a,t),a}(this.state.array,500),a=0;t.forEach((function(n){var r=document.getElementsByClassName("array-bar");if(a%3!==2){var o=Object(i.a)(t[a],2),s=o[0],u=o[1],l=r[s].style,c=r[u].style,m=a%3===0?"red":"turquoise";setTimeout((function(){l.backgroundColor=m,c.backgroundColor=m}),a*e.state.ANIMATION_SPEED_MS)}else setTimeout((function(){var e=Object(i.a)(n,2),t=e[0],a=e[1];r[t].style.height="".concat(a,"px")}),a*e.state.ANIMATION_SPEED_MS);a++})),this.sortingCompletedAnimation(a*this.state.ANIMATION_SPEED_MS)}},{key:"selectionSort",value:function(){for(var e=this,t=function(e){var t=[];return e.length<=1?e:(function(e,t){for(var a=e[0],n=0,r=0,o=0;o<e.length-1;++o){for(var s=o+1;s<e.length;++s)e[s]<a&&(a=e[s],n=s);t.push([o,n]),t.push([o,n]),t.push([o,a]),t.push([n,e[o]]),r=e[o],e[o]=a,e[n]=r,a=e[o+1]}}(e,t),t)}(this.state.array),a=document.getElementsByClassName("array-bar"),n=0,r=function(n){if(n%4<=1){var r=Object(i.a)(t[n],2),o=r[0],s=r[1],u=a[o].style,l=a[s].style,c=n%2===0?"red":"turquoise";setTimeout((function(){u.backgroundColor=c,l.backgroundColor=c}),n*e.state.ANIMATION_SPEED_MS)}else setTimeout((function(){var e=Object(i.a)(t[n],2),r=e[0],o=e[1];a[r].style.height="".concat(o,"px")}),n*e.state.ANIMATION_SPEED_MS)},o=n;o<t.length;++o,++n)r(o);this.sortingCompletedAnimation(n*this.state.ANIMATION_SPEED_MS)}},{key:"bubbleSort",value:function(){for(var e=this,t=p(this.state.array),a=document.getElementsByClassName("array-bar"),n=0,r=function(n){if(n%4<=1){var r=Object(i.a)(t[n],2),o=r[0],s=r[1],u=a[o].style,l=a[s].style,c=n%2===0?"red":"turquoise";setTimeout((function(){u.backgroundColor=c,l.backgroundColor=c}),n*e.state.ANIMATION_SPEED_MS)}else setTimeout((function(){var e=Object(i.a)(t[n],2),r=e[0],o=e[1];a[r].style.height="".concat(o,"px")}),n*e.state.ANIMATION_SPEED_MS)},o=n;o<t.length;++o,++n)r(o);this.sortingCompletedAnimation(n*this.state.ANIMATION_SPEED_MS)}},{key:"reverseBubbleSort",value:function(){for(var e=this,t=function(e){var t=[];return e.length<=1?e:(function(e,t){for(var a=0,n=0;n<e.length-1;++n)for(var r=n+1;r<e.length;++r)e[r]<e[n]&&(t.push([n,r]),t.push([n,r]),a=e[r],e[r]=e[n],e[n]=a,t.push([n,e[n]]),t.push([r,e[r]]))}(e,t),t)}(this.state.array),a=document.getElementsByClassName("array-bar"),n=0,r=function(n){if(n%4<=1){var r=Object(i.a)(t[n],2),o=r[0],s=r[1],u=a[o].style,l=a[s].style,c=n%2===0?"red":"turquoise";setTimeout((function(){u.backgroundColor=c,l.backgroundColor=c}),n*e.state.ANIMATION_SPEED_MS)}else setTimeout((function(){var e=Object(i.a)(t[n],2),r=e[0],o=e[1];a[r].style.height="".concat(o,"px")}),n*e.state.ANIMATION_SPEED_MS)},o=n;o<t.length;++o,++n)r(o);this.sortingCompletedAnimation(n*this.state.ANIMATION_SPEED_MS)}},{key:"sortingCompletedAnimation",value:function(e){var t=this,a=function(e){var t=[];return function(e,t){for(var a=0;a<e.length;a++)t.push([a]),t.push([a])}(e,t),t}(this.state.array),n=0;a.forEach((function(a){setTimeout((function(){var r=document.getElementsByClassName("array-bar"),o=n%2===0,s=r[Object(i.a)(a,1)[0]].style;console.log(n+" "+e),setTimeout((function(){s.backgroundColor=o?"blue":"turquoise"}),n*t.state.ANIMATION_SPEED_MS),n++}),e)}))}},{key:"testSortingAlgorithms",value:function(){for(var e=0;e<100;e++){for(var t=[],a=_(1,1e3),n=0;n<a;n++)t.push(_(-1e3,1e3));var r=t.slice().sort((function(e,t){return e-t})),o=N(t.slice());console.log(M(r,o))}}},{key:"render",value:function(){var e=this,t=this.state.array;return r.a.createElement("div",{className:""},r.a.createElement("div",{className:"d-flex justify-content-center array-container align-items-baseline"},t.map((function(e,t){return r.a.createElement("div",{className:"array-bar",key:t,style:{backgroundColor:"turquoise",height:"".concat(e,"px")}})}))),r.a.createElement(g.a,{fluid:!0,className:"controls-container"},r.a.createElement(E.a,{className:"justify-content-center"},r.a.createElement(v.a,{lg:2,md:"auto",sm:12},r.a.createElement("div",{className:"d-flex align-items-center"},r.a.createElement("div",null,"Animation speed(ms): "),r.a.createElement(S.a,{style:{input:{width:"50%"}},min:1,max:300,value:this.state.ANIMATION_SPEED_MS,step:10,onChange:function(t){e.setState({ANIMATION_SPEED_MS:t})}}))),r.a.createElement(v.a,{lg:2,md:"auto",sm:12},r.a.createElement("div",{className:"d-flex align-items-center"},r.a.createElement("div",null,"Array size : "),r.a.createElement(A.a,{axis:"x",xstep:10,xmin:10,xmax:300,x:this.state.NUMBER_OF_ARRAY_BARS,onChange:function(t){var a=t.x;e.setState({sliderCoords:{x:a},NUMBER_OF_ARRAY_BARS:a}),e.resetArray()}}))),r.a.createElement(v.a,{lg:"auto",md:"auto",sm:12},r.a.createElement("div",{className:"d-flex justify-content-center"},r.a.createElement(f.a,{className:"control-button btn-secondary",onClick:function(){return e.resetArray()}},"Generate New Array"))),r.a.createElement(v.a,{lg:2,md:"auto",sm:12},r.a.createElement(d.a,null,r.a.createElement(d.a.Toggle,{variant:"success",id:"dropdown-basic"},"Sorting Algorithms"),r.a.createElement(d.a.Menu,null,r.a.createElement(d.a.Item,{onClick:function(){e.mergeSort()}},"Merge Sort"),r.a.createElement(d.a.Item,{onClick:function(){return e.selectionSort()}},"Selection Sort"),r.a.createElement(d.a.Item,{onClick:function(){return e.bubbleSort()}},"Bubble Sort"),r.a.createElement(d.a.Item,{onClick:function(){return e.reverseBubbleSort()}},"Reserve Bubble Sort"),r.a.createElement(d.a.Item,{onClick:function(){return e.traversal()}},"BECOME SQUARE")))))))}}]),t}(r.a.Component);function _(e,t){return Math.floor(Math.random()*(t-e+1)+e)}function M(e,t){if(e.length!==t.length)return!1;for(var a=0;a<e.length;a++)if(e[a]!==t[a])return!1;return!0}a(37);var I=function(){return r.a.createElement("div",{className:"App"},r.a.createElement(b,null))};Boolean("localhost"===window.location.hostname||"[::1]"===window.location.hostname||window.location.hostname.match(/^127(?:\.(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)){3}$/));s.a.render(r.a.createElement(I,null),document.getElementById("root")),"serviceWorker"in navigator&&navigator.serviceWorker.ready.then((function(e){e.unregister()}))}},[[26,1,2]]]);
//# sourceMappingURL=main.327ebaa1.chunk.js.map