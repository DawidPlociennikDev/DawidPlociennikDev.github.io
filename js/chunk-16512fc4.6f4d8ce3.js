(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-16512fc4"],{"04a9":function(t,a,d){},"3ad6":function(t,a,d){"use strict";d.r(a);var r=function(){var t=this,a=t.$createElement,d=t._self._c||a;return d("div",{staticClass:"container pb-5"},[d("div",{staticClass:"article"},[d("div",{staticClass:"article_inner"},[d("a",{attrs:{title:"Powrót"},on:{click:function(a){return t.$router.go(-1)}}},[d("mdb-icon",{attrs:{icon:"chevron-left"}}),t._v(" powrót")],1),d("hr"),d("p",{staticClass:"text-right"},[t._v(" "+t._s(t.post.created)+" ")]),d("h4",{staticClass:"text-center font-weight-bold"},[t._v(" "+t._s(t.post.title)),d("br"),d("small",[t._v(t._s(t.post.subtitle))])]),d("div",{staticClass:"text-center"},[d("img",{staticClass:"img-thumbnail my-3 mx-auto",attrs:{src:"/admin/uploads/"+t.post.photo}})]),d("div",[d("span",{domProps:{innerHTML:t._s(t.tagsDesc(t.post.description))}})])])])])},e=[],s=d("91c9"),o=d("bc3a"),i=d.n(o),n={name:"Article",data(){return{id:this.$route.params.id,post:[]}},async created(){const t="http://dawidplociennikdev.przedprojekt.com/admin/articles/apiOne/"+this.id;try{const a=await i.a.get(t);this.post=a.data,console.log(this.post)}catch(a){console.log(a)}},methods:{tagsDesc(t){return t}},components:{mdbContainer:s["mdbContainer"],mdbRow:s["mdbRow"],mdbCol:s["mdbCol"],mdbCard:s["mdbCard"],mdbCardImage:s["mdbCardImage"],mdbCardHeader:s["mdbCardHeader"],mdbCardBody:s["mdbCardBody"],mdbCardTitle:s["mdbCardTitle"],mdbCardText:s["mdbCardText"],mdbCardFooter:s["mdbCardFooter"],mdbCardUp:s["mdbCardUp"],mdbCardAvatar:s["mdbCardAvatar"],mdbCardGroup:s["mdbCardGroup"],mdbBtn:s["mdbBtn"],mdbView:s["mdbView"],mdbMask:s["mdbMask"],mdbIcon:s["mdbIcon"]}},c=n,m=(d("4935"),d("2877")),b=Object(m["a"])(c,r,e,!1,null,null,null);a["default"]=b.exports},4935:function(t,a,d){"use strict";var r=d("04a9"),e=d.n(r);e.a}}]);
//# sourceMappingURL=chunk-16512fc4.6f4d8ce3.js.map