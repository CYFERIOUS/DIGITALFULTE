/**
 * Adobe Edge: symbol definitions
 */
(function($, Edge, compId){
//images folder
var im='images/';

var fonts = {};
   fonts['iceberg, sans-serif']='<script src=\"http://use.edgefonts.net/iceberg:n4:all.js\"></script>';
   fonts['atomic-age, sans-serif']='<script src=\"http://use.edgefonts.net/atomic-age:n4:all.js\"></script>';
   fonts['abril-fatface, serif']='<script src=\"http://use.edgefonts.net/abril-fatface:n4,i4:all.js\"></script>';


var resources = [
];
var symbols = {
"stage": {
   version: "1.5.0",
   minimumCompatibleVersion: "1.5.0",
   build: "1.5.0.217",
   baseState: "Base State",
   initialState: "Base State",
   gpuAccelerate: false,
   resizeInstances: false,
   content: {
         dom: [
         {
            id:'banner1',
            type:'image',
            rect:['0','0','950px','100px','auto','auto'],
            fill:["rgba(0,0,0,0)",'banner1.svg','0px','0px'],
            filter:[0,0,2,1,0,0,0,0,"rgba(0,0,0,0)",0,0,0]
         },
         {
            id:'Text',
            type:'text',
            rect:['403px','79px','146px','17px','auto','auto'],
            text:"::DIE ZAUBERFLÖTE::",
            font:['iceberg, sans-serif',16,"rgba(108,118,127,1.00)","normal","none",""],
            textShadow:["rgba(0,0,0,0.65)",1,1,1]
         },
         {
            id:'bola',
            type:'image',
            rect:['443px','0','68px','68px','auto','auto'],
            fill:["rgba(0,0,0,0)",'bola.gif','0px','0px']
         },
         {
            id:'dgFlte',
            display:'none',
            type:'image',
            rect:['378px','0px','190px','100px','auto','auto'],
            fill:["rgba(0,0,0,0)",'dgFlte.jpg','0px','0px']
         }],
         symbolInstances: [

         ]
      },
   states: {
      "Base State": {
         "${_banner1}": [
            ["subproperty", "filter.grayscale", '0'],
            ["style", "opacity", '0'],
            ["subproperty", "filter.contrast", '2'],
            ["subproperty", "filter.blur", '0px']
         ],
         "${_Text}": [
            ["subproperty", "textShadow.blur", '1px'],
            ["subproperty", "textShadow.offsetH", '1px'],
            ["color", "color", 'rgba(108,118,127,1.00)'],
            ["subproperty", "textShadow.offsetV", '1px'],
            ["style", "left", '403px'],
            ["style", "width", '146px'],
            ["style", "top", '79px'],
            ["style", "height", '17px'],
            ["style", "font-family", 'iceberg, sans-serif'],
            ["subproperty", "textShadow.color", 'rgba(0,0,0,0.65)'],
            ["style", "font-size", '16px']
         ],
         "${_Stage}": [
            ["color", "background-color", 'rgba(218,240,243,1.00)'],
            ["style", "overflow", 'hidden'],
            ["style", "height", '100px'],
            ["style", "width", '950px']
         ],
         "${_bola}": [
            ["style", "height", '68px'],
            ["style", "left", '443px'],
            ["style", "width", '68px']
         ],
         "${_dgFlte}": [
            ["style", "-webkit-transform-origin", [50,50], {valueTemplate:'@@0@@% @@1@@%'} ],
            ["style", "-moz-transform-origin", [50,50],{valueTemplate:'@@0@@% @@1@@%'}],
            ["style", "-ms-transform-origin", [50,50],{valueTemplate:'@@0@@% @@1@@%'}],
            ["style", "msTransformOrigin", [50,50],{valueTemplate:'@@0@@% @@1@@%'}],
            ["style", "-o-transform-origin", [50,50],{valueTemplate:'@@0@@% @@1@@%'}],
            ["style", "bottom", 'auto'],
            ["transform", "scaleX", '1'],
            ["style", "opacity", '0'],
            ["style", "left", '0px'],
            ["style", "width", '190px'],
            ["style", "top", '0px'],
            ["transform", "scaleY", '1'],
            ["style", "display", 'none'],
            ["style", "right", 'auto'],
            ["style", "height", '100px']
         ]
      }
   },
   timelines: {
      "Default Timeline": {
         fromState: "Base State",
         toState: "",
         duration: 12000,
         autoPlay: true,
         timeline: [
            { id: "eid240", tween: [ "style", "${_dgFlte}", "display", 'block', { fromValue: 'none'}], position: 3000, duration: 0 },
            { id: "eid258", tween: [ "style", "${_dgFlte}", "left", '378px', { fromValue: '0px'}], position: 3000, duration: 1000, easing: "easeInOutBounce" },
            { id: "eid259", tween: [ "style", "${_dgFlte}", "left", '760px', { fromValue: '378px'}], position: 9000, duration: 1000, easing: "easeInOutBounce" },
            { id: "eid91", tween: [ "style", "${_banner1}", "opacity", '0.3', { fromValue: '0'}], position: 0, duration: 1000 },
            { id: "eid92", tween: [ "style", "${_banner1}", "opacity", '0', { fromValue: '0.3'}], position: 1000, duration: 1000 },
            { id: "eid243", tween: [ "style", "${_dgFlte}", "opacity", '1', { fromValue: '0'}], position: 3000, duration: 1000, easing: "easeInOutBounce" },
            { id: "eid248", tween: [ "style", "${_dgFlte}", "opacity", '0', { fromValue: '1'}], position: 9000, duration: 1000 },
            { id: "eid226", tween: [ "subproperty", "${_banner1}", "filter.blur", '0px', { fromValue: '0px'}], position: 0, duration: 0 },
            { id: "eid274", tween: [ "transform", "${_dgFlte}", "scaleX", '0.19', { fromValue: '1'}], position: 8250, duration: 250 },
            { id: "eid276", tween: [ "transform", "${_dgFlte}", "scaleX", '0.99', { fromValue: '0.19'}], position: 8500, duration: 250, easing: "easeInOutExpo" },
            { id: "eid278", tween: [ "transform", "${_dgFlte}", "scaleX", '0.25', { fromValue: '0.99'}], position: 8750, duration: 250, easing: "easeInOutBack" },
            { id: "eid269", tween: [ "style", "${_dgFlte}", "-webkit-transform-origin", [50,50], { valueTemplate: '@@0@@% @@1@@%', fromValue: [50,50]}], position: 4000, duration: 0 },
            { id: "eid383", tween: [ "style", "${_dgFlte}", "-moz-transform-origin", [50,50], { valueTemplate: '@@0@@% @@1@@%', fromValue: [50,50]}], position: 4000, duration: 0 },
            { id: "eid384", tween: [ "style", "${_dgFlte}", "-ms-transform-origin", [50,50], { valueTemplate: '@@0@@% @@1@@%', fromValue: [50,50]}], position: 4000, duration: 0 },
            { id: "eid385", tween: [ "style", "${_dgFlte}", "msTransformOrigin", [50,50], { valueTemplate: '@@0@@% @@1@@%', fromValue: [50,50]}], position: 4000, duration: 0 },
            { id: "eid386", tween: [ "style", "${_dgFlte}", "-o-transform-origin", [50,50], { valueTemplate: '@@0@@% @@1@@%', fromValue: [50,50]}], position: 4000, duration: 0 },
            { id: "eid222", tween: [ "color", "${_Stage}", "background-color", 'rgba(255,255,255,1.00)', { animationColorSpace: 'RGB', valueTemplate: undefined, fromValue: 'rgba(218,240,243,1.00)'}], position: 0, duration: 1987 },
            { id: "eid275", tween: [ "transform", "${_dgFlte}", "scaleY", '0.19', { fromValue: '1'}], position: 8250, duration: 250, easing: "easeInOutBack" },
            { id: "eid277", tween: [ "transform", "${_dgFlte}", "scaleY", '0.99', { fromValue: '0.19'}], position: 8500, duration: 250, easing: "easeInOutBack" },
            { id: "eid279", tween: [ "transform", "${_dgFlte}", "scaleY", '0.25', { fromValue: '0.99'}], position: 8750, duration: 250, easing: "easeInOutBack" }         ]
      }
   }
}
};


Edge.registerCompositionDefn(compId, symbols, fonts, resources);

/**
 * Adobe Edge DOM Ready Event Handler
 */
$(window).ready(function() {
     Edge.launchComposition(compId);
});
})(jQuery, AdobeEdge, "EDGE-1410492");
