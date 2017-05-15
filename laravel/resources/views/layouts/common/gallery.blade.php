<script type='text/javascript' src="/js/build/marketapts.min.js"></script>
<link rel="stylesheet" href="/js/src/jquery-ui-1.12.1.custom/jquery-ui.min.css"/>
<script src="/js/src/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script type="text/javascript" src='/js/src/gallery-uploader.js?v=<?php echo fileatime(public_path() . '/js/src/gallery-uploader.js');?>'></script>
<script type='text/javascript' src="/js/src/jquery-ui-1.12.1.custom/popover.js?v=<?php echo fileatime(public_path() . '/js/src/jquery-ui-1.12.1.custom/popover.js');?>"></script>
<link rel='stylesheet' href='/css/jquery-uploader/bootstrap.css'/>
<link rel='stylesheet' href='/css/jquery-uploader/bootstrap-responsive.css'/>
<link href="/css/jquery-uploader/prettify.css" type="text/css" rel="stylesheet" />
<link rel='stylesheet' href='/css/jquery-uploader/popover.less'/>
<style type="text/css" media="screen" id="less:popover-styles-popover">/*  Colors */
html {
  font-size: 100%;
}
.borderBox {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}
#popoverWrapper {
  font-family: "Helvetica Neue", Helvetica, sans-serif;
  position: fixed;
  height: 100%;
  width: 305px;
  padding-top: 14px;
  visibility: hidden;
  top: 0;
  left: 0;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  z-index: 10;
  pointer-events: none;
  -webkit-transform: translatez(0);
}
#popover {
  position: relative;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  height: 100%;
  width: 100%;
  color: #333335;
  visibility: visible !important;
  z-index: 10;
  -webkit-transform: translatez(0);
}
#popover a {
  color: #333335;
}
#popoverHeader {
  position: absolute;
  z-index: 1;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  width: 100%;
  overflow: hidden;
  line-height: 45px;
  font-size: 0.8888888888888888em;
  background: #ffffff;
  border-bottom: 1px solid #cccccc;
  visibility: visible;
  border-right: 1px solid #cccccc;
  border-left: 1px solid #cccccc;
  height: 49px;
  pointer-events: auto;
  border-top: 1px solid #cccccc;
  -webkit-border-top-left-radius: 5px;
  -moz-border-top-left-radius: 5px;
  -ms-border-top-left-radius: 5px;
  -o-border-top-left-radius: 5px;
  border-top-left-radius: 5px;
  -webkit-border-top-right-radius: 5px;
  -moz-border-top-right-radius: 5px;
  -ms-border-top-right-radius: 5px;
  -o-border-top-right-radius: 5px;
  border-top-right-radius: 5px;
}
#popoverArrow {
  position: absolute;
  float: left;
  margin-top: -15px;
  margin-left: -11px;
  /* Half width */

  visibility: visible;
  left: 50%;
  z-index: 2;
  line-height: 20px;
  height: 18px;
  width: 18px;
  font-size: 18px;
  color: #fff;
  -webkit-transform: scale(2, 1);
  text-shadow: 0 -1px #cccccc;
}
.flipArrow {
  text-shadow: 0 1px #ccc !important;
}
#popoverClose,
#popoverBack {
  position: absolute;
  cursor: pointer;
  height: 49px;
  line-height: 49px;
}
#popoverCloseIcon,
#popoverBackIcon {
  display: inline-block;
  color: #555;
  margin: -2px 10px;
  font-size: 22px;
  font-weight: 800;
}
#popoverClose {
  top: 0;
  right: 0;
}
#popoverBackIcon {
  -webkit-transform: scale(0.75, 1);
}
#popoverBackIcon:hover,
#popoverCloseIcon:hover {
  color: #333335;
}
#popoverTitle {
  white-space: nowrap;
  text-align: center;
  max-width: 225px;
  overflow: hidden;
  margin: 0 auto;
  height: 100%;
  width: 100%;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}
#popoverContentWrapper {
  position: relative;
  overflow: visible !important;
  padding-top: 0px;
  height: 100%;
  width: 100%;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}
.roundedCornersTop {
  -webkit-border-top-left-radius: 5px;
  -moz-border-top-left-radius: 5px;
  -ms-border-top-left-radius: 5px;
  -o-border-top-left-radius: 5px;
  border-top-left-radius: 5px;
  -webkit-border-top-right-radius: 5px;
  -moz-border-top-right-radius: 5px;
  -ms-border-top-right-radius: 5px;
  -o-border-top-right-radius: 5px;
  border-top-right-radius: 5px;
}
.roundedCornersBot {
  -webkit-border-bottom-left-radius: 5px;
  -moz-border-bottom-left-radius: 5px;
  -ms-border-bottom-left-radius: 5px;
  -o-border-bottom-left-radius: 5px;
  border-bottom-left-radius: 5px;
  -webkit-border-bottom-right-radius: 5px;
  -moz-border-bottom-right-radius: 5px;
  -ms-border-bottom-right-radius: 5px;
  -o-border-bottom-right-radius: 5px;
  border-bottom-right-radius: 5px;
}
#popoverContent {
  border-top: 1px solid #cccccc;
  visibility: visible;
  position: relative;
  overflow: auto;
  min-height: 43px;
  max-height: 100%;
  width: 100%;
  text-align: left;
  font-size: 1em;
  background: #ffffff;
  box-shadow: 0px 12px 15px -6px #888888;
  border-right: 1px solid #cccccc;
  border-left: 1px solid #cccccc;
  border-bottom: 1px solid #cccccc;
  -webkit-border-bottom-left-radius: 5px;
  -moz-border-bottom-left-radius: 5px;
  -ms-border-bottom-left-radius: 5px;
  -o-border-bottom-left-radius: 5px;
  border-bottom-left-radius: 5px;
  -webkit-border-bottom-right-radius: 5px;
  -moz-border-bottom-right-radius: 5px;
  -ms-border-bottom-right-radius: 5px;
  -o-border-bottom-right-radius: 5px;
  border-bottom-right-radius: 5px;
  -webkit-border-top-left-radius: 5px;
  -moz-border-top-left-radius: 5px;
  -ms-border-top-left-radius: 5px;
  -o-border-top-left-radius: 5px;
  border-top-left-radius: 5px;
  -webkit-border-top-right-radius: 5px;
  -moz-border-top-right-radius: 5px;
  -ms-border-top-right-radius: 5px;
  -o-border-top-right-radius: 5px;
  border-top-right-radius: 5px;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}
#popoverContent .last {
  border-bottom: none;
  padding-bottom: 13px;
}
.popoverContentRow {
  display: block;
  cursor: pointer;
  padding: 12px 23px;
  border-bottom: 1px solid #f1f2f2;
}
.popoverContentRow:hover {
  background: #e6e6e6;
}
@media only screen and (max-width: 390px) {

}
#popoverContentWrapper .jspPane {
  width: 100% !important;
  -webkit-box-shadow: 0 0 10px #777779;
  box-shadow: 0 0 10px #777779;
}
#popoverContentWrapper .jspDrag {
  background: #777779;
}
#popoverContentWrapper .jspCapTop {
  display: block;
  height: 49px;
}
#popoverContentWrapper .jspCapBottom {
  display: block;
  height: 2px;
}
#popoverWrapper,
#popover,
#popoverContentWrapper .jspContainer {
  pointer-events: none;
}
#popoverWrapper .jspPane,
#popoverWrapper .jspVerticalBar,
#popoverHeader,
#popoverContent {
  pointer-events: auto;
}
.ui-state-highlight {
    width: 33.333% !important;
    border: none !important;
}
</style>
