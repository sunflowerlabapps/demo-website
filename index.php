<html><!-- Text between angle brackets is an HTML tag and is not displayed.
Most tags, such as the HTML and /HTML tags that surround the contents of
a page, come in pairs; some tags, like HR, for a horizontal rule, stand 
alone. Comments, such as the text you're reading, are not displayed when
the Web page is shown. The information between the HEAD and /HEAD tags is 
not displayed. The information between the BODY and /BODY tags is displayed.--><head><script data-ezscrex='false' data-cfasync='false' data-pagespeed-no-defer>var __ez=__ez||{};__ez.stms=Date.now();__ez.evt={};__ez.script={};__ez.ck=__ez.ck||{};__ez.template={};__ez.template.isOrig=false;__ez.queue=(function(){var count=0,incr=0,items=[],timeDelayFired=false,hpItems=[],lpItems=[],allowLoad=true;var obj={func:function(name,funcName,parameters,isBlock,blockedBy,deleteWhenComplete,proceedIfError){var self=this;this.name=name;this.funcName=funcName;this.parameters=parameters===null?null:(parameters instanceof Array)?parameters:[parameters];this.isBlock=isBlock;this.blockedBy=blockedBy;this.deleteWhenComplete=deleteWhenComplete;this.isError=false;this.isComplete=false;this.isInitialized=false;this.proceedIfError=proceedIfError;this.isTimeDelay=false;this.process=function(){log("... func = "+name);self.isInitialized=true;self.isComplete=true;log("... func.apply: "+name);var funcs=self.funcName.split('.');var func=null;if(funcs.length>3){}else if(funcs.length===3){func=window[funcs[0]][funcs[1]][funcs[2]];}else if(funcs.length===2){func=window[funcs[0]][funcs[1]];}else{func=window[self.funcName];}
if(typeof func!=='undefined'&&func!==null){func.apply(null,this.parameters);}
if(self.deleteWhenComplete===true)delete items[name];if(self.isBlock===true){log("----- F'D: "+self.name);processAll();}}},file:function(name,path,isBlock,blockedBy,async,defer,proceedIfError){var self=this;this.name=name;this.path=path;this.async=async;this.defer=defer;this.isBlock=isBlock;this.blockedBy=blockedBy;this.isInitialized=false;this.isError=false;this.isComplete=false;this.proceedIfError=proceedIfError;this.isTimeDelay=false;this.process=function(){self.isInitialized=true;log("... file = "+name);var scr=document.createElement('script');scr.src=path;if(async===true)scr.async=true;else if(defer===true)scr.defer=true;scr.onerror=function(){log("----- ERR'D: "+self.name);self.isError=true;if(self.isBlock===true){processAll();}};scr.onreadystatechange=scr.onload=function(){var state=scr.readyState;log("----- F'D: "+self.name);if((!state||/loaded|complete/.test(state))){self.isComplete=true;if(self.isBlock===true){processAll();}}};document.getElementsByTagName('head')[0].appendChild(scr);}},fileLoaded:function(name,isComplete){this.name=name;this.path="";this.async=false;this.defer=false;this.isBlock=false;this.blockedBy=[];this.isInitialized=true;this.isError=false;this.isComplete=isComplete;this.proceedIfError=false;this.isTimeDelay=false;this.process=function(){};}};function init(){window.addEventListener("load",function(){setTimeout(function(){timeDelayFired=true;log('TDELAY -----');processAll();},5000);},false);}
function addFile(name,path,isBlock,blockedBy,async,defer,proceedIfError,priority){var item=new obj.file(name,path,isBlock,blockedBy,async,defer,proceedIfError);if(priority===true){hpItems[name]=item}else{lpItems[name]=item}
items[name]=item;checkIfBlocked(item);}
function setallowLoad(settobool){allowLoad=settobool}
function addFunc(name,func,parameters,isBlock,blockedBy,autoInc,deleteWhenComplete,proceedIfError,priority){if(autoInc===true)name=name+"_"+incr++;var item=new obj.func(name,func,parameters,isBlock,blockedBy,deleteWhenComplete,proceedIfError);if(priority===true){hpItems[name]=item}else{lpItems[name]=item}
items[name]=item;checkIfBlocked(item);}
function addTimeDelayFile(name,path){var item=new obj.file(name,path,false,[],false,false,true);item.isTimeDelay=true;log(name+' ... '+' FILE! TDELAY');lpItems[name]=item;items[name]=item;checkIfBlocked(item);}
function addTimeDelayFunc(name,func,parameters){var item=new obj.func(name,func,parameters,false,[],true,true);item.isTimeDelay=true;log(name+' ... '+' FUNCTION! TDELAY');lpItems[name]=item;items[name]=item;checkIfBlocked(item);}
function checkIfBlocked(item){if(isBlocked(item)===true||allowLoad==false)return;item.process();}
function isBlocked(item){if(item.isTimeDelay===true&&timeDelayFired===false){log(item.name+" blocked = TIME DELAY!");return true;}
if(item.blockedBy instanceof Array){for(var i=0;i<item.blockedBy.length;i++){var block=item.blockedBy[i];if(items.hasOwnProperty(block)===false){log(item.name+" blocked = "+block);return true;}else if(item.proceedIfError===true&&items[block].isError===true){return false;}else if(items[block].isComplete===false){log(item.name+" blocked = "+block);return true;}}}
return false;}
function markLoaded(filename){if(!filename||0===filename.length){return;}
if(filename in items){var item=items[filename];if(item.isComplete===true){log(item.name+' '+filename+': error loaded duplicate')}else{item.isComplete=true;item.isInitialized=true;}}else{items[filename]=new obj.fileLoaded(filename,true);}
log("markLoaded dummyfile: "+items[filename].name);}
function logWhatsBlocked(){for(var i in items){if(items.hasOwnProperty(i)===false)continue;var item=items[i];isBlocked(item)}}
function log(msg){var href=window.location.href;var reg=new RegExp('[?&]ezq=([^&#]*)','i');var string=reg.exec(href);var res=string?string[1]:null;if(res==="1")console.debug(msg);}
function processAll(){count++;if(count>200)return;log("let's go");processItems(hpItems);processItems(lpItems);}
function processItems(list){for(var i in list){if(list.hasOwnProperty(i)===false)continue;var item=list[i];if(item.isComplete===true||isBlocked(item)||item.isInitialized===true||item.isError===true){if(item.isError===true){log(item.name+': error')}else if(item.isComplete===true){log(item.name+': complete already')}else if(item.isInitialized===true){log(item.name+': initialized already')}}else{item.process();}}}
init();return{addFile:addFile,addDelayFile:addTimeDelayFile,addFunc:addFunc,addDelayFunc:addTimeDelayFunc,items:items,processAll:processAll,setallowLoad:setallowLoad,markLoaded:markLoaded,logWhatsBlocked:logWhatsBlocked,};})();__ez.evt.add=function(e,t,n){e.addEventListener?e.addEventListener(t,n,!1):e.attachEvent?e.attachEvent("on"+t,n):e["on"+t]=n()},__ez.evt.remove=function(e,t,n){e.removeEventListener?e.removeEventListener(t,n,!1):e.detachEvent?e.detachEvent("on"+t,n):delete e["on"+t]};__ez.script.add=function(e){var t=document.createElement("script");t.src=e,t.async=!0,t.type="text/javascript",document.getElementsByTagName("head")[0].appendChild(t)};__ez.dot={};</script>
<script>var __sellerid="cc7dee9232e820ec3d37cae9d028177c";var __ez_nid ="21732118914";</script>
<script>var ezasVars = {'cid':'','pid':''};</script>
<script>window.ezhbopt=true;</script>
<link rel='preload' as='script' href='//securepubads.g.doubleclick.net/tag/js/gpt.js'>
<link href="//ad.doubleclick.net" rel="dns-prefetch">
<link href="//pagead2.googlesyndication.com" rel="dns-prefetch">
<link href="//googleads.g.doubleclick.net" rel="dns-prefetch">
<link href="//tpc.googlesyndication.com" rel="dns-prefetch">
<link href="//adservice.google.com" rel="dns-prefetch">
<link href="//secureads.g.doubleclick.net" rel="dns-prefetch">
<link href="//www.googletagservices.com" rel="dns-prefetch">
<link rel='preload' as='script' href='//go.ezodn.com/hb/dall.js?b=amx,oftmedia,onemobile,onetag,pubmatic,pubmatic,pulsepoint,rhythmone,unruly&cb=195-2-27'>
<script type="text/javascript">
	var __banger_pmp_deals=[];
</script>
<script type='text/javascript'>_ebcids=[138231308856,138231308940,138231308949,138231387842,138231421744,138231421759,138231421774,138231421783,138231421789,138231421792,138242067587,138242067590,138242067602,138242067605,138242067608,138242067614,138242229406,138242229415,138242229421,138242229430];</script>
<script data-ezscrex="false" data-cfasync="false" data-pagespeed-no-defer type='text/javascript'>ezobv=76;</script><script data-ezscrex="false" data-cfasync="false" data-pagespeed-no-defer type='text/javascript'>function ez_isclean(data){if(typeof data==='undefined'){data=document.URL;}
var re=/(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))(@|%2540|%40)((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))/;var isClean=!re.test(data);return isClean;}
var ezSlotKVStore={};function ezSetSlotTargeting(divid,key,value){var slot=ezGetSlotById(divid);if(slot){slot.setTargeting(key,value);}else{if(typeof ezSlotKVStore[divid]=='undefined'){ezSlotKVStore[divid]={};}
ezSlotKVStore[divid][key]=value;}}
function ezGetSlotById(id){if(typeof window.ezslots==='undefined'||window.ezslots==0){return;}
for(var i=0;i<window.ezslots.length;i++){var slot=window[ezslots[i]];if(typeof slot==='undefined'){continue;}
var slotId=slot.getSlotElementId();if(typeof slotId!=='undefined'&&slotId==id){return slot;}}}
function ezSetTargetingFromMap(slot,obj){if(typeof slot==='undefined'){return;}
for(var key in obj){if(!obj.hasOwnProperty(key)){continue;}
slot.setTargeting(key,obj[key]);}}
var ez_queue=new Array();function sort_queue(a,b)
{if(a.priority<b.priority)return-1;else if(a.priority==b.priority)return 0;else return 1;}
function execute_ez_queue()
{ez_queue.sort(sort_queue);for(var i in ez_queue)
{if(typeof ez_queue[i].method!="undefined")
{try{ez_queue[i].method.call(null);}
catch(err){}}}}
window.ez_ad_units=new Array();window.ezslots=new Array();window.ezsrqt={};function ez_write_tag(d){if(ez_isclean()&&d instanceof Array){if(typeof ezstandalone!=='undefined'&&typeof ezstandalone.selectedPlaceholders!=='undefined'&&ezstandalone.selectedPlaceholders[d[3]]===true){return "1+1";}
ez_ad_units[ez_ad_units.length]=d;var dve="";if(typeof d[5]!='undefined'&&d[5]>0){dve='_'+d[5];}
var ezcmd="googletag.cmd.push(function() {var divid = 'div-gpt-ad-"+d[1]+"-"+d[4]+""+dve+"';if(typeof ezlrarn == 'function'){ezlrarn(divid);}googletag.display(divid);var to = 0;if("+d[2]+".getTargeting('ga')[0] == '0'){to = 500;}if((window.ezDisableInitialLoad==true || googletag.pubads().isInitialLoadDisabled()) && window.ezoll != true){setTimeout(function(){if(typeof window.adjustHbValues == 'function'){window.adjustHbValues("+d[2]+");}googletag.pubads().refresh(["+d[2]+"])},to);}});";return ezcmd;}
return "1+1";}
function in_array(needle,haystack){var length=haystack.length;for(var i=0;i<length;i++){if(haystack[i]==needle)return true;}
return false;}
var ezrpos=new Array();var ez_current_interval;var ez_current_load=0;function __ez_fad_load(n,r){if(!__ez_fad_csnt()||!__ez_fad_rdy()||ezslit_run[n]===true||typeof __ez_fad_divs[n]==='undefined'||__ez_fad_divs[n].length===0){return;}
ezslit_run[n]=true;__ez_fad_gpt();if(n>0&&n!==5){__ez_fad_pb();}
googletag.cmd.push(function(){var s=[];for(var i=0;i<__ez_fad_divs[n].length;i++){if(__ez_fad_divsd.indexOf(__ez_fad_divs[n][i])==-1){__ez_fad_divsd.push(__ez_fad_divs[n][i]);s.push(__ez_fad_initslot[__ez_fad_divs[n][i]](r));googletag.display(__ez_fad_divs[n][i]);}}
var ws=[];for(i3=0;i3<s.length;i3++){if(typeof window.adjustHbValues==='function'){window.adjustHbValues(window[s[i3]]);}
ws.push(window[s[i3]]);}
googletag.pubads().refresh(ws);setTimeout(__ez_fad_floatshow,0);});if(n===0){if(document.readyState==="complete"){googletag.cmd.push(function(){__ez_fad_load(5,null);});setTimeout(function(){__ez_fad_load(1,null);__ez_fad_load(5,null);},5500);return;}
document.addEventListener('DOMContentLoaded',function(evt){googletag.cmd.push(function(){__ez_fad_load(5,null);});setTimeout(function(){__ez_fad_load(1,null);__ez_fad_load(5,null);},5500);},false);}}
var __ez_fad_floatshowd=false;function __ez_fad_floatshow(d){if(__ez_fad_floatshowd===true||typeof __ez_fad_floating==='undefined'){return;}
__ez_fad_floatshowd=true;var e=document.getElementById('ezmobfooter');if(e!=null){e.classList.add('ezmobtrans');}else{head=document.head||document.getElementsByTagName('head')[0],style=document.createElement('style');head.appendChild(style);var css="body > #ezmobfooter{bottom:0px !important;visibility:visible;}";style.type='text/css';if(style.styleSheet){style.styleSheet.cssText=css;}else{style.appendChild(document.createTextNode(css));}}
googletag.cmd.push(function(){for(var i=0;i<__ez_fad_floating.length;i++){var s=__ez_fad_initslot[__ez_fad_floating[i]](null);googletag.display(__ez_fad_floating[i]);if(typeof window.adjustHbValues==='function'){window.adjustHbValues(window[s]);}
googletag.pubads().refresh([window[s]]);}});}
var __ez_fad_initslot={};var __ez_fad_fastd=[];var __ez_fad_fastdiv=[];var __ez_fad_fastslots=[];var __ez_fad_viewslots=[];var __ez_fad_instaslots=[];var ezslit_run=[];var __ez_fad_divs=[[],[],[],[],[],[],[]];__ez_fad_divpos={};var __ez_fad_divsd=[];var __ez_fad_vw=window.screen.width;var __ez_fad_vh=window.screen.height;var __ez_fad_count=0;function __ez_fad_invisible(e){!!(e.offsetWidth||e.offsetHeight||e.getClientRects().length)}
function __ez_fad_position(id){var did=document.getElementById(id);if(did!=null){var rect=did.getBoundingClientRect();var vs=window.scrollY||document.body.scrollTop||document.documentElement.scrollTop;var vh=vs+__ez_fad_vh;_ez_fad_vw=window.innerWidth||document.documentElement.clientWidth||document.body.clientWidth;__ez_fad_vh=window.innerHeight||Math.max(document.documentElement.clientHeight,document.body.clientHeight);var height_adjust=800;if(__ez_fad_vw<1200){height_adjust=__ez_fad_vh*1.25;vh+=0;}
if(__ez_fad_floating.indexOf(id)==-1){__ez_fad_divpos[id]=rect.top;if(__ez_fad_invisible(did)&&isFloat!=true){__ez_fad_divs[4].push(id);}else if(rect.top<vh&&(ezslit_run[0]!=true||ezslit_run[5]!=true)){if(ezslit_run[0]!=true){__ez_fad_gpt();__ez_fad_divs[0].push(id);}else{__ez_fad_divs[5].push(id);}}else if(rect.top<(vh+height_adjust)&&ezslit_run[1]!=true){if(ezslit_run[0]!=true){__ez_fad_load(0,0);};__ez_fad_divs[1].push(id);}else if(rect.top<(vh+height_adjust+(__ez_fad_vh))&&ezslit_run[2]!=true){if(ezslit_run[0]!=true){__ez_fad_load(0,0);}
__ez_fad_divs[2].push(id);}else{__ez_fad_divs[3].push(id);}
__ez_fad_count++;}}}
function __ez_fad_fast(s,f,m){if(__ez_fad_fastd.indexOf(s)==-1){__ez_fad_fastd.push(s);googletag.cmd.push(function(){var ebbr2='empty';var br2=0;if(typeof ezoibfh[f]!='undefined'){ebbr2=ezoibfh[f];br2=f;}
if(typeof window['ezslot_'+s]!='undefined'){var br1=parseInt(window['ezslot_'+s].getTargeting('br1')[0]);if(isNaN(br1)||br2<br1){window['ezslot_'+s].setTargeting('br1',br2).setTargeting('eb_br',ebbr2);if(m!=null){window['ezslot_'+s].setTargeting('bvr',m);}}else{}}else{}});}}
function __ez_fad_csnt(){return document.cookie.indexOf('ezCMPCookieConsent')!==-1||typeof __ez_conestreq=='undefined';}
var __ez_fad_haspo=false;if(typeof PerformanceObserver!='undefined'&&typeof PerformanceObserver.supportedEntryTypes!='undefined'){if(PerformanceObserver.supportedEntryTypes.indexOf('largest-contentful-paint')>-1){__ez_fad_haspo=true;}}
function __ez_fad_rdy(){if(document.body!==null&&(__ez_fad_haspo==false&&__ez_fad_doc_ht>__ez_fad_vp_ht||__ez_fad_hascp)||document.readyState==="complete"){return true;}else{__ez_fad_doc_ht=__ez_fad_docht();__ez_fad_vp_ht=__ez_fad_vpht();}
return false;}
function __ez_fad_docht(){if(typeof document.body!='undefined'&&document.body!=null){return Math.max(document.body.scrollHeight,document.body.offsetHeight);}else if(typeof document.documentElement!='undefined'){return Math.max(document.documentElement.clientHeight,document.documentElement.scrollHeight,document.documentElement.offsetHeight);}else{return 0;}}
function __ez_fad_vpht(){if(typeof window.innerHeight!='undefined'){return window.innerHeight;}else if(typeof document.body!='undefined'&&document.body!=null){return document.body.clientHeight;}else if(typeof document.documentElement!='undefined'){return document.documentElement.clientHeight;}
else{return 0;}}
var __ez_fad_doc_ht=__ez_fad_docht();var __ez_fad_vp_ht=__ez_fad_vpht();var __ez_fad_hascp=false;try{const __ez__fad_po=new PerformanceObserver((entryList)=>{__ez_fad_hascp=true;});__ez__fad_po.observe({type:'largest-contentful-paint',buffered:true});}catch(e){}</script><script type='text/javascript' data-ezscrex="false">var ezorbf = []; </script><script data-ezscrex="false" data-cfasync="false" data-pagespeed-no-defer type='text/javascript'>window.isEZABL=false;window.ezmadspc=300;window.ezoViewCheck=false;</script><script data-ezscrex="false" data-cfasync="false" data-pagespeed-no-defer type='text/javascript'>window.ezDisableInitialLoad=false;</script><script data-ezscrex="false" data-cfasync="false" data-pagespeed-no-defer type='text/javascript'>window.googletag=window.googletag||{};googletag.cmd=googletag.cmd||[];</script><script data-ezscrex="false" data-cfasync="false" data-pagespeed-no-defer type='text/javascript'>(function(){var gads=document.createElement('script');gads.async=true;gads.type='text/javascript';var useSSL='https:'==document.location.protocol;gads.src=(useSSL?'https:':'http:')+
'//securepubads.g.doubleclick.net/tag/js/gpt.js';var node=document.getElementsByTagName('script')[0];node.parentNode.insertBefore(gads,node);})();</script><script data-ezscrex="false" data-cfasync="false" data-pagespeed-no-defer type='text/javascript'>window.ezogetbrkey = function(s){ var k = 'br1';var k2 = 'eb_br';if(window.ezogtk == ""){k='br1u';k2='eb_bru';}else if(window.ezogtk != "NT"){k='br1t';k2='eb_brt';} s.setTargeting('br1', s.getTargeting(k));s.setTargeting('eb_br', s.getTargeting(k2));};googletag.cmd.push(function() {ezslot_interstitial = googletag.defineOutOfPageSlot('/21732118914,22573772600/filesamples_com-pixel1',googletag.enums.OutOfPageFormat.INTERSTITIAL); if(ezslot_interstitial != null) {ezslot_interstitial.addService(googletag.pubads()).setTargeting('tap','filesamples_com-pixel1-2231562776143334').setTargeting('ap','9999').setTargeting('iid1','2231562776143334').setTargeting('bra','mod12-c');}
		googletag.pubads().enableSingleRequest();googletag.pubads().addEventListener('slotRenderEnded', function(event) { __ez.queue.addFunc("ezbanger", "ezbanger", event, false, ['banger.js'], true, true, false, true); });googletag.pubads().addEventListener('impressionViewable', function(event) { __ez.queue.addFunc("ezvb", "ezvb", event, false, ['banger.js'], true, true, false, true); });googletag.pubads().addEventListener('slotResponseReceived', function(event) { __ez.queue.addFunc("ezsr", "ezsr", event, false, ['banger.js'], true, true, false, true); });googletag.pubads().addEventListener('slotRequested', function(e) { window.ezsrqt[e.slot.getSlotElementId()] = Date.now();});googletag.pubads().disableInitialLoad();googletag.pubads().enableLazyLoad({fetchMarginPercent: -1, renderMarginPercent: 250, mobileScaling: 2.0});googletag.enableServices();});window.ezoll = false;window.ezoadxnc = '21732118914';window.ezoadhb = '0';var ezoibfh = {0:'zero',1000000:'off',550:'fdeb1c0131f36a890082d4fe8e1da0d1',32:'91e22f7223f09c1ff1a7040043fe9b1b',8500:'f8d4949dfa1cd057cea2710716209c7f',3400:'d37f0cccb14e0539ddcbe7d9442849c2',450:'f63322dda53fb357fc621e718fd4fb87',180:'534fb181871009a53a0e48bf40359a65',34:'cc08e2bb0d386fbf4465310e5dcc50e8',650:'db457ec4f01ff743ad5ed236c4bdfebb',240:'8e05f6c6b0f467a340fd9f1edf21c2da',160:'736e4998c7cae21e6c67e08e2de4db76',7500:'78be9a55de1cd0daf0f9f4241d2a9aac',3800:'3ea5df27fc0a820b893436aa36c79e94',1800:'5233c23062683d6509453cde6fc6add3',850:'89140e49112be0d1d542e0eda661bd02',800:'04496beb0f6ca268a9a33f6569f82cb5',140:'13817432a186231a2c8afb2cc1bac45d',14:'780324bcbe122aeb7768d94246861ef2',1700:'8e2d589a04d2a07b8344f6816b701b81',120:'9b8b7ac6c7f250874e7a1340470af55d',46:'fc44e27e7de5f52a5f3c42d1877542d7',28:'fe1f34fd0c4fe8bf8d52adece55deeb2',24:'4b9359dae970d701895b70c7efed2383',350:'073dd12bd568a53b780a1e7d84a65a39',260:'028fd4209634b3f030ec544d795c74ac',80:'931e89386514f6e0ab7df9718ec5a124',3600:'dd0f0e0c0043ba550236bd27b7b70c26',2500:'e6e2557c86cd7149c48f969a744ec959',2300:'cb6283e3d812020dd479fcdb3bcd10d9',1100:'8a72b14553d8dfd39917a04b6b74550d',600:'f0925b4547fc827b18897e82de41f3b6',48:'a07d6583d81e029ba17a8abf2bdda13b',12:'41f20af1f102ac44e83c11508b6865c1',6:'f09d4fef38161a27d028cff6eebf43aa',4000:'bf67e259026bfecb714b2030b13219da',70:'ea7c242a89c8cb1608366a3d063fa70d',2:'ff65489184a8bd745b588323ab1b4e22',950:'13505aceb7f83a105b073aa7cc81124c',900:'04ebbcfde9a1ec4f315d9a36cf0b7b8e',220:'c8f8afd5bc9d2b8b306959d0f8989efe',9500:'bd3e9a2338c16697298ee845cab12bf9',3200:'0d2c8bede853cf55980e311dcbac37f6',2800:'2dec8993b7df924710f56fbdf582bca0',2100:'a8fc62cdaaad9ea4ba6561072b1d55b9',1400:'3991a6d8703c4b654d6670aa0aa33d85',90:'1ea83551a903e458c56ec08ec0ffaa93',9000:'52d97bb21b9ec2e4dee04ef905e69fcd',4400:'de4718936d6de5dd72de66460e2bb1ed',2000:'995960f3f08874f9439eeba20420e444',1000:'c8c538c0b156a3ed71b8a1a8556e8ddf',7000:'c9eb194a03463ae9c7addbf5dcaf0bb5',2200:'f30ba7de9e2a33f0f927ef82759eb3ce',300:'aea15b65f697c2bc2826a2d1d3e3275f',44:'588553dcabeb5286f2bd86e6617a0d98',42:'f66e127b473e92f89e2d14510803ea0a',16:'5123967dad9631f0d2a57fa9c3237b87',8000:'51d01ec591b812b51d33819407b231a6',6000:'0b390056e791335bea40aec6f442f878',2900:'66a0664079afc68395d1473de7e96234',1900:'cce43b634ca6fe368c77e70edfe1459b',280:'2acc48f80457fdc6d4d6786673884135',5000:'646931016eae379439f377bcb2c5268c',4200:'527e5910769dbf94f03bfda216f1c6ab',1500:'6a552ada640fe30aee10cad530838cc8',30:'d753ba285129d8fd7ef33dec95bcaa7e',8:'e2195fcdbbb593f7fa040d51c2eaea6c',10:'295bc01864bf3dbd0117e0a3f7f6bc96',10000:'9d8bb435718279a0b1522476659ec8ee',4800:'9fc0364b618f92b289e3ca740805ed29',200:'bb779436aa3533ea7e00abe462374b80',40:'6f1c86ebad23a9c4f3d9e02ac8a8dbbf',20:'45449ee2d6533045f60351c94107ba8e',50:'f0b3832c5a11b18826c14c2c6c503110',36:'c6ffcfdd3dd19ac09fbf0cb03baa3e4b',26:'09900f25ac768e2ab6f6a1b9b20b686a',4600:'f199f1deeaa9ffcf9ca5a92dc0015d01',3000:'afa7b50cfd753efd11b70750b4f8ae73',750:'8667d34af751e626afa0f7877d61515b',700:'b09f4d2e4dcd3d270724508a246baee4',60:'5dfc84b2afe9d09bb5135bfcbbc5970f',2400:'59d60de427504e4f978eaf5090bf5ce5',400:'24b380adcc0659544af3c796e2648643',18:'190bf94969f2d51c1f9954199aa5f4f8',38:'2987c3db2c41b735b4d6867239315fb0',22:'eeb512de4b40f938fd78cdef344a7ebd',6500:'01888d10552798d679f91c3f50dd8d8e',5500:'0e56664f6b2b4dcf1be595a936fa7a6d',2700:'de93c002cd098eab12d5cb55a2440831',1200:'4e79eeb5c47815f3d62b430ba7a86908',100:'2b579bd406d80336360cc9360dca858a',2600:'68d6469c39f32e4588c90be4436fc935',1600:'1cc6194a60dec937c7bbae022bbe3dfd',1300:'eac3f7dff0bea6446490695dba17123e',500:'6d82aebae6bcefcae8983b0dcc92cec9',4:'063a7705d5a9d51bc46e0a87fba28a89'};var ezaxmns={};var ezaucmns={};

		var __ez_fad_floating = [];
		var __ez_fad_gptd = false;var __ez_fad_ezpbinitd = false;function __ez_fad_gpt(){if(__ez_fad_gptd == false){__ez_fad_gptd=true;(function(){var gads=document.createElement('script');gads.async=true;gads.type='text/javascript';var useSSL='https:'==document.location.protocol;gads.src=(useSSL?'https:':'http:')+
'//securepubads.g.doubleclick.net/tag/js/gpt.js';var node=document.getElementsByTagName('script')[0];node.parentNode.insertBefore(gads,node);})();}}function __ez_fad_pb(){if(__ez_fad_ezpbinitd==false && typeof __ez_fad_ezpbinit == 'function'){__ez_fad_ezpbinitd = true;__ez_fad_ezpbinit()}};
		</script>
<script type="text/javascript">(function(){function storageAvailable(type){var storage;try{storage=window[type];var x='__storage_test__';storage.setItem(x,x);storage.removeItem(x);return true;}
catch(e){return e instanceof DOMException&&(e.code===22||e.code===1014||e.name==='QuotaExceededError'||e.name==='NS_ERROR_DOM_QUOTA_REACHED')&&(storage&&storage.length!==0);}}
function remove_ama_config(){if(storageAvailable('localStorage')){localStorage.removeItem("google_ama_config");}}
remove_ama_config()})()</script>
<script data-ezscrex="false" data-cfasync="false">__ez.ssaf=[];__ez.sswp=4;__ez.ssv=85694;__ez.sshsdef=false;</script>
<script type="text/javascript">var ezoicTestActive = true</script>
<script data-ezscrex="false" type="text/javascript" data-cfasync="false">var _ezaq = {"ad_cache_level":0,"ad_count_adjustment":1,"ad_lazyload_version":2,"ad_load_version":1,"ad_location_ids":"6","ad_transform_level":0,"adx_ad_count":0,"bidder_method":1,"bidder_version":3,"city":"Surat","country":"IN","days_since_last_visit":-1,"display_ad_count":0,"domain_id":176527,"domain_test_group":20210308,"ds_adsize_opt_id":-1,"engaged_time_visit":0,"ezcache_level":0,"ezcache_skip_code":0,"form_factor_id":1,"framework_id":1,"has_bad_image":0,"has_bad_words":0,"iab_category":"","iab_category_0":"596","is_from_recommended_pages":false,"is_return_visitor":false,"is_sitespeed":1,"last_page_load":"1631773191901","last_pageview_id":"39faf9fc-e24a-485b-72f2-75e2c577e062","lt_cache_level":0,"max_ads":2,"metro_code":0,"optimization_version":1,"page_ad_positions":"1006","page_view_count":1,"page_view_id":"3ad23945-23c6-4564-7ad7-dd944e8ac54d","position_selection_id":39,"postal_code":"394101","pv_event_count":0,"response_size_orig":1291,"response_time_orig":376,"serverid":"13.127.247.182:15513","state":"GJ","sub_page_ad_positions":"1006","t_epoch":1631773195,"template_id":147,"time_on_site_visit":0,"url":"https://filesamples.com/samples/code/html/sample2.html","user_id":0,"word_count":84,"worst_bad_word_level":0};var _ezim_d = {"filesamples_com-pixel1":{"adsense_stat_source_id":5,"adx_ad_count":0,"adx_stat_source_id":35,"full_id":"filesamples_com-pixel1/2021-09-16/2231562776143334","height":"3","position_id":1006,"sub_position_id":1006,"width":"3"}};var _ezat = {"domain_id":176527,"form_factor_id":1,"framework_id":1,"pageview_date":"2021-09-16","pageview_id":"3ad23945-23c6-4564-7ad7-dd944e8ac54d","template_id":147,"url":"https://filesamples.com/samples/code/html/sample2.html","visit_uuid":"d3dcd24d-ebb1-449f-4110-3125a48cdb80"};</script><script data-ezscrex="false" data-pagespeed-no-defer data-cfasync="false" type="text/javascript">__ez.queue.addFile('banger.js', '/porpoiseant/banger.js?cb=195-2&bv=76&v=52&PageSpeed=off', true, [], true, false, false, true);</script>
<script data-ezscrex='false' data-cfasync='false' data-pagespeed-no-defer>__ez.vep=(function(){var pixels=[],pxURL="/detroitchicago/grapefruit.gif";function AddPixel(vID,pixelData){if(__ez.dot.isDefined(vID)&&__ez.dot.isValid(pixelData)){pixels.push({type:'video',video_impression_id:vID,domain_id:__ez.dot.getDID(),t_epoch:__ez.dot.getEpoch(0),data:__ez.dot.dataToStr(pixelData)});}}
function Fire(){if(typeof document.visibilityState!=='undefined'&&document.visibilityState==="prerender"){return;}
if(__ez.dot.isDefined(pixels)&&pixels.length>0){while(pixels.length>0){var j=5;if(j>pixels.length){j=pixels.length;}
var pushPixels=pixels.splice(0,j);var pixelURL=__ez.dot.getURL(pxURL)+"?orig="+(__ez.template.isOrig===true?1:0)+"&v="+btoa(JSON.stringify(pushPixels));__ez.dot.Fire(pixelURL);}}
pixels=[];}
return{Add:AddPixel,Fire:Fire};})();</script><script data-ezscrex='false' data-cfasync='false' data-pagespeed-no-defer>__ez.pel=(function(){var pixels=[],pxURL="/porpoiseant/army.gif";function AddAndFirePixel(adSlot,pixelData){AddPixel(adSlot,pixelData,0,0,0,0,0);Fire();}
function AddAndFireOrigPixel(adSlot,pixelData){AddPixel(adSlot,pixelData,0,0,0,0,0,true);Fire();}
function GetCurrentPixels(){return pixels;}
function AddPixel(adSlot,pixelData,revenue,est_revenue,bid_floor_filled,bid_floor_prev,stat_source_id,isOrig){if(!__ez.dot.isDefined(adSlot)||__ez.dot.isAnyDefined(adSlot.getSlotElementId,adSlot.ElementId)==false){return;}
var ad_position_id=parseInt(__ez.dot.getTargeting(adSlot,'ap'));var impId=__ez.dot.getSlotIID(adSlot),adUnit=__ez.dot.getAdUnit(adSlot,isOrig);var compId=parseInt(__ez.dot.getTargeting(adSlot,"compid"));var lineItemId=0;var creativeId=0;var ezimData=getEzimData(adSlot);if(typeof ezimData=='object'){if(ezimData.creative_id!==undefined){creativeId=ezimData.creative_id;}
if(ezimData.line_item_id!==undefined){lineItemId=ezimData.line_item_id;}}
if(__ez.dot.isDefined(impId,adUnit)&&__ez.dot.isValid(pixelData)){pixels.push({type:"impression",impression_id:impId,domain_id:__ez.dot.getDID(),unit:adUnit,t_epoch:__ez.dot.getEpoch(0),revenue:revenue,est_revenue:est_revenue,ad_position:ad_position_id,ad_size:"",bid_floor_filled:bid_floor_filled,bid_floor_prev:bid_floor_prev,stat_source_id:stat_source_id,country_code:__ez.dot.getCC(),pageview_id:__ez.dot.getPageviewId(),comp_id:compId,line_item_id:lineItemId,creative_id:creativeId,data:__ez.dot.dataToStr(pixelData),is_orig:isOrig||__ez.template.isOrig,});}}
function AddPixelById(impFullId,pixelData,isOrig){var vals=impFullId.split('/');if(__ez.dot.isDefined(impFullId)&&vals.length===3&&__ez.dot.isValid(pixelData)){var adUnit=vals[0],impId=vals[2];pixels.push({type:"impression",impression_id:impId,domain_id:__ez.dot.getDID(),unit:adUnit,t_epoch:__ez.dot.getEpoch(0),pageview_id:__ez.dot.getPageviewId(),data:__ez.dot.dataToStr(pixelData),is_orig:isOrig||__ez.template.isOrig});}}
function Fire(){if(typeof document.visibilityState!=='undefined'&&document.visibilityState==="prerender")return;if(__ez.dot.isDefined(pixels)&&pixels.length>0){var allPixels=[pixels.filter(function(pixel){return pixel.is_orig}),pixels.filter(function(pixel){return!pixel.is_orig})];allPixels.forEach(function(pixels){while(pixels.length>0){var isOrig=pixels[0].is_orig||false;var j=5;if(j>pixels.length){j=pixels.length;}
var pushPixels=pixels.splice(0,j);var pixelURL=__ez.dot.getURL(pxURL)+"?orig="+(isOrig===true?1:0)+"&sts="+btoa(JSON.stringify(pushPixels));if(typeof window.isAmp!=='undefined'&&isAmp&&typeof window._ezaq!=='undefined'&&_ezaq.hasOwnProperty("domain_id")){pixelURL+="&visit_uuid="+_ezaq['visit_uuid'];}
__ez.dot.Fire(pixelURL);}})}
pixels=[];}
function getEzimData(adSlot){if(typeof _ezim_d=="undefined"){return false}
var adUnitName=__ez.dot.getAdUnitPath(adSlot).split('/').pop();if(typeof _ezim_d==='object'&&_ezim_d.hasOwnProperty(adUnitName)){return _ezim_d[adUnitName];}
for(var ezimKey in _ezim_d){if(ezimKey.split('/').pop()===adUnitName){return _ezim_d[ezimKey];}}
return false;}
return{Add:AddPixel,AddAndFire:AddAndFirePixel,AddAndFireOrig:AddAndFireOrigPixel,AddById:AddPixelById,Fire:Fire,GetPixels:GetCurrentPixels,};})();</script><link rel="preconnect" href="//www.mygifs.com" crossorigin=""/>
<link rel="preconnect" href="//www.dummies.com" crossorigin=""/>
<link rel="preconnect" href="//go.ezoic.net" crossorigin=""/>
<title>Enter a title, displayed at the top of the window.</title>
<style>.ezoic-ad{display:inline-block;border:0px;}.ezoic-ad>div>iframe{margin:0px!important;padding:0px!important;}
.adtester-container-133,.adtester-container-135,.adtester-container-136,.adtester-container-124,.adtester-container-123,.adtester-container-137,.adtester-container-128,.adtester-container-131,.adtester-container-134,.adtester-container-139,.adtester-container-122,.adtester-container-127,.adtester-container-132,.adtester-container-138,.adtester-container-126,.adtester-container-130,.adtester-container-140,.adtester-container-125,.adtester-container-100,.adtester-container-121,.adtester-container-129{display:none!important}
.ezoic-floating-bottom { display: none!important; }</style><link rel='canonical' href='https://filesamples.com/samples/code/html/sample2.html' />
<script type="text/javascript">var ezouid = "1";</script><base href="https://filesamples.com/samples/code/html/sample2.html"><script type='text/javascript'>
var ezoTemplate = 'pub_site_noads';
if(typeof ezouid == 'undefined')
{
    var ezouid = 'none';
}
var ezoFormfactor = '1';
var ezo_elements_to_check = Array();
</script><!-- START EZHEAD -->
<script data-ezscrex="false" type='text/javascript'>
var soc_app_id = '0';
var did = 176527;
var ezdomain = 'filesamples.com';
var ezoicSearchable = 1;
</script>
<!--{jquery}-->
<!-- END EZHEAD -->
<script data-ezscrex='false' data-cfasync='false' type='text/javascript' style='display:none' defer>__ez.queue.addFile('__ezf_ezosuigeneris', '//g.ezoic.net/ezosuigeneris.js?i=e81d005b400661de80084515a9dd5359', true, ["/detroitchicago/boise.js"], true, false, false, false);</script><script data-ezscrex='false' data-cfasync='false' type='text/javascript' style='display:none' defer>__ez.queue.addFile('__ezf_ezosuigenerisc', '//g.ezoic.net/ezosuigenerisc.js?nogen=1', true, ["/detroitchicago/boise.js"], true, false, false, false);</script>
<script data-ezscrex='false' data-pagespeed-no-defer data-cfasync='false'>
function create_ezolpl(pvID, rv) {
    var d = new Date();
    d.setTime(d.getTime() + (365*24*60*60*1000));
    var expires = "expires="+d.toUTCString();
    __ez.ck.setByCat("ezux_lpl_176527=" + new Date().getTime() + "|" + pvID + "|" + rv + "; " + expires, 3);
}
function attach_ezolpl(pvID, rv) {
    if (document.readyState === "complete") {
        create_ezolpl(pvID, rv);
    }
    if(window.attachEvent) {
        window.attachEvent("onload", create_ezolpl, pvID, rv);
    } else {
        if(window.onload) {
            var curronload = window.onload;
            var newonload = function(evt) {
                curronload(evt);
                create_ezolpl(pvID, rv);
            };
            window.onload = newonload;
        } else {
            window.onload = create_ezolpl.bind(null, pvID, rv);
        }
    }
}

__ez.queue.addFunc("attach_ezolpl", "attach_ezolpl", ["3ad23945-23c6-4564-7ad7-dd944e8ac54d", "false"], false, ['/detroitchicago/boise.js'], true, false, false, false);
</script>
<script type="text/javascript">var _audins_dom="filesamples_com",_audins_did=176527;__ez.queue.addFile('/detroitchicago/cmbv2.js', '/detroitchicago/cmbv2.js?gcb=195-2&cb=04-1y02-4y06-12y07-1y19-5y0b-5y0d-14y13-3y17-4y1a-2y1f-3y32-21y51-1&cmbcb=20&sj=x04x02x06x07x19x0bx0dx13x17x1ax1fx32x51', true, [], true, false, true, false);</script>
<script type="text/javascript" defer>__ez.queue.addFile('/detroitchicago/cmbdv2.js', '/detroitchicago/cmbdv2.js?gcb=195-2&cb=03-4y0c-5y18-4y33-21&cmbcb=20&sj=x03x0cx18x33', true, ['/detroitchicago/cmbv2.js'], true, false, true, false);</script></head>
<!-- The information between the BODY and /BODY tags is displayed.-->
<body>
<h1>Enter the main heading, usually the same as the title.</h1>
<p>Be <b>bold</b> in stating your key points. Put them in a list: </p>
<ul>
<li>The first item in your list</li>
<li>The second item; <i>italicize</i> key words</li>
</ul>
<p>Improve your image by including an image. </p>
<p><img src="http://www.mygifs.com/CoverImage.gif" alt="A Great HTML Resource"/></p>
<p>Add a link to your favorite <a href="app://open.my.app/lorem/ipsum">Web site</a>.
Break up your page with a horizontal rule or two. </p>
<hr/>
<p>Finally, link to <a href="page2.html">another page</a> in your own Web site.</p>
<!-- And add a copyright notice.-->
<p>&#169; Wiley Publishing, 2011</p>

<script type="text/javascript">
				var __inScopeForCCPA = false;
		function __uspapi(command, version, callback) {
			var response = null;
			var successs = false;
			if (command === "getUSPData" && version === 1) {
				var uspString = "1"; // Version
				if (__inScopeForCCPA) {
					uspString += "N"; // Has Explicit Notice for Opt Out been provided (ex footer or minor consent modal)
					var result;
					var consentCookie = (result = new RegExp('(?:^|; )ezoccpaconsent=([^;]*)').exec(document.cookie)) ? (result[1]) : null;
					if (consentCookie === "nonconsent") {
						uspString += "Y";
					}
					else {
						uspString += "N";
					}
					uspString += "N" // Is pub a signatory to the IAB Limited Service Provider Agreement (http://www.iabprivacy.com/)
				}
				else {
					uspString += "---";
				}
				response = {
					uspString: uspString,
					version: 1
				};
				success = true;
			}
			return callback(response, success);
		};
		function __receiveUspapiMessage(event) {
			if (event.data.hasOwnProperty('__uspapiCall')) {
				__uspapi('getUSPData', 1, function(uspData, success) {
					event.source.postMessage({
						__uspapiReturn: {
							returnValue: uspData,
							success: success,
							callId: event.data.__uspapiCall.callId
						}
					},
					event.origin);
				});
			}
			return null;
		};
		window.addEventListener("message", __receiveUspapiMessage, false);
</script>
<script>function __ez_fad_ezpbinit(){var s = document.createElement( 'script' );
	s.setAttribute( 'src', '//go.ezodn.com/hb/dall.js?b=amx,oftmedia,onemobile,onetag,pubmatic,pubmatic,pulsepoint,rhythmone,unruly&cb=195-2-27' );
	document.body.appendChild( s );}var epbjs=epbjs||{};epbjs.que=epbjs.que||[];epbjs.bidderTimeout=2500;epbjs.useAdj=true;epbjs.SS={"amx":11290,"oftmedia":10081,"onemobile":11293,"onetag":11291,"pubmatic":10061,"pulsepoint":11301,"rhythmone":11298,"unruly":10097};epbjs.bidders=['amx,oftmedia,onemobile,onetag,pubmatic,pubmatic,pulsepoint,rhythmone,unruly'];epbjs.que.push(function(){epbjs.aliasBidder('appnexus', 'oftmedia');});epbjs.bidderSettings={'oftmedia': { bidCpmAdjustment: function(bidCpm) { var adj1 = bidCpm * 0.850000; var adj2 = adj1 * 1.000000; return adj2; }},'pubmatic': { bidCpmAdjustment: function(bidCpm) { var adj1 = bidCpm * 1.000000; var adj2 = adj1 * 1.000000; return adj2; }},'pubmatic': { bidCpmAdjustment: function(bidCpm) { var adj1 = bidCpm * 1.000000; var adj2 = adj1 * 1.000000; return adj2; }},'amx': { bidCpmAdjustment: function(bidCpm) { var adj1 = bidCpm * 1.000000; var adj2 = adj1 * 1.000000; return adj2; }},'unruly': { bidCpmAdjustment: function(bidCpm) { var adj1 = bidCpm * 0.420000; var adj2 = adj1 * 1.000000; return adj2; }},'rhythmone': { bidCpmAdjustment: function(bidCpm) { var adj1 = bidCpm * 1.000000; var adj2 = adj1 * 1.000000; return adj2; }},'pulsepoint': { bidCpmAdjustment: function(bidCpm) { var adj1 = bidCpm * 1.000000; var adj2 = adj1 * 1.000000; return adj2; }},'onemobile': { bidCpmAdjustment: function(bidCpm) { var adj1 = bidCpm * 1.000000; var adj2 = adj1 * 1.000000; return adj2; }},'onetag': { bidCpmAdjustment: function(bidCpm) { var adj1 = bidCpm * 1.000000; var adj2 = adj1 * 1.000000; return adj2; }},};epbjs.gadj=1.000000;var __enableAnalytics=false;
var __s2sbidders=['onetag'];
var __allBidders=['oftmedia','pubmatic','pubmatic','amx','unruly','rhythmone','pulsepoint','onemobile','onetag'];
__ez.queue.addFile('/detroitchicago/houston.js', '/detroitchicago/houston.js?gcb=2&cb=4', false, [], true, false, true, false);__ez.queue.addFunc("epbjsRequestAdUnits", "epbjsRequestAdUnits", [[]], false, ['/detroitchicago/houston.js'], true, true, true, true);</script>
<script>var __ez_tkn_evnt = function() { if(typeof(_ezaq) != 'undefined'){if(typeof window.ezogtk !== "undefined" && window.ezogtk !== "") {__ez.bit.AddAndFire(_ezaq.page_view_id,[new __ezDotData("ext_user_hash",window.ezogtk)]);}}};document.addEventListener("DOMContentLoaded", __ez.queue.addFunc("__ez_tkn_evnt", "__ez_tkn_evnt", event, false, ['/detroitchicago/minneapolis.js','/detroitchicago/memphis.js'], true, true, false, true));</script>
<script async data-ezscrex="false">__ez_fad_load(0,0);__ez_fad_doc_ht=__ez_fad_docht();__ez_fad_vp_ht=__ez_fad_vpht();function __ez_fad_scroll(){return window.pageYOffset||(document.documentElement||document.body.parentNode||document.body).scrollTop}
var __ez_fad_scrollint=setInterval(function(){var sy=__ez_fad_scroll();var isShortPage=__ez_fad_doc_ht<=(__ez_fad_vh+100);var bot=(__ez_fad_vp_ht+sy);var botThresh=bot+__ez_fad_vp_ht;for(var divid in __ez_fad_divpos){if(__ez_fad_fastdiv.indexOf(divid)!=-1){continue;}
var divPos=__ez_fad_divpos[divid];if(divPos>0&&divPos>sy&&divPos<(sy+200)){if(typeof __ez_fad_instaslots[divid]=='function'){__ez_fad_instaslots[divid]();}}else if(divPos>0&&divPos>sy&&divPos<(sy+600)){if(typeof __ez_fad_instaslots[divid]=='function'){__ez_fad_viewslots[divid]();}}}
__ez_fad_chkpos();if(ezslit_run[0]!==true){__ez_fad_load(0,0);}
if((sy>0||isShortPage)&&ezslit_run[1]!=true){__ez_fad_load(1,null);__ez_fad_load(5,null);}
if((sy>100||isShortPage)&&ezslit_run[2]!=true){__ez_fad_load(2,null);}
if(sy>(__ez_fad_vp_ht*.75)&&ezslit_run[3]!=true){__ez_fad_load(3,null);}
if(document.readyState==="complete"&&!__ez_fad_floatshowd&&typeof __ez_fad_floating!=='undefined'&&__ez_fad_floating.length>0&&__ez_fad_count===0){googletag.cmd.push(__ez_fad_floatshow);}
if(ezslit_run[1]==true&&ezslit_run[2]==true&&ezslit_run[3]==true){clearInterval(__ez_fad_scrollint);}},500);function __ez_fad_chkpos(){if(typeof __ez_fad_divs[4]!='undefined'){for(var i=0;i<__ez_fad_divs[4].length;i++){var id=__ez_fad_divs[4][i];__ez_fad_divs[4][i]=null;__ez_fad_position([id]);}}}</script>

		<script>setTimeout(function(){if(typeof ezslot_interstitial==="undefined"){return;}
googletag.cmd.push(function(){googletag.display(ezslot_interstitial);});googletag.cmd.push(function(){googletag.pubads().refresh([ezslot_interstitial]);});},1000);</script>
<script type="text/javascript">(function(f,a){function g(b,a,c){b.addEventListener?b.addEventListener(a,c):b.attachEvent("on"+a,function(){c.call(b)})}function k(b){b&&("string"==typeof b["class"]&&b["class"]&&a.getElementById("uglipop_popbox").setAttribute("class",b["class"]),b.keepLayout&&!b["class"]&&a.getElementById("uglipop_popbox").setAttribute("style","position:relative;height:300px;width:300px;background-color:white;opacity:1;"),"string"==typeof b.content&&b.content&&"html"==b.source&&(a.getElementById("uglipop_popbox").innerHTML=b.content),"string"==typeof b.content&&b.content&&"div"==b.source&&(a.getElementById("uglipop_popbox").innerHTML=a.getElementById(b.content).innerHTML));a.getElementById("uglipop_overlay_wrapper").style.display="";a.getElementById("uglipop_overlay").style.display="";a.getElementById("uglipop_content_fixed").style.display=""}function h(){a.getElementById("uglipop_overlay_wrapper").style.display="none";a.getElementById("uglipop_overlay").style.display="none";a.getElementById("uglipop_content_fixed").style.display="none"}g(a,"DOMContentLoaded",function(){var b=a.createElement("div"),e=a.createElement("div"),c=a.createElement("div"),d=a.createElement("div");e.id="uglipop_content_fixed";e.setAttribute("style","position:fixed;top: 50%;left: 50%;transform: translate(-50%, -50%);-webkit-transform: translate(-50%, -50%);-ms-transform: translate(-50%, -50%);opacity:1;z-index:10000000;");c.id="uglipop_popbox";d.id="uglipop_overlay_wrapper";d.setAttribute("style","position:absolute;top:0;bottom:0;left:0;right:0;display:none");b.id="uglipop_overlay";b.setAttribute("style","position:fixed;top:0;bottom:0;left:0;right:0;opacity:0.3;width:100%;height:100%;background-color:black;");d.appendChild(b);e.appendChild(c);a.body.appendChild(d);a.body.appendChild(e);a.getElementById("uglipop_overlay_wrapper").style.display="none";a.getElementById("uglipop_overlay").style.display="none";a.getElementById("uglipop_content_fixed").style.display="none";d.addEventListener("click",h);g(f,"keydown",function(a){27==a.keyCode&&h()});f.uglipop=k})})(window,document);var ezRBA=(function(){function init(){var reportAdsBtns=document.querySelectorAll('.ez-report-ad-button');for(var i=0;i<reportAdsBtns.length;i++){reportAdsBtns[i].addEventListener('click',function(e){var url='<iframe src="https://svc.ezoic.com/pub/reportads/reportads.html'+e.target.getAttribute('name')+'" width="400" height="500" style="border-radius: 10px; box-shadow: 2px 2px 30px 6px rgba(0,0,0,0.75); border: 1px solid black;"></iframe>'
uglipop({class:'none',source:'html',content:url,});});}
function bindEvent(element,eventName,eventHandler){if(element.addEventListener){element.addEventListener(eventName,eventHandler,false);}else if(element.attachEvent){element.attachEvent('on'+eventName,eventHandler);}}
bindEvent(window,'message',function(e){if(e.data==='close-report-ad-modal'){document.getElementById('uglipop_overlay_wrapper').style.display='none';document.getElementById('uglipop_overlay').style.display='none';document.getElementById('uglipop_content_fixed').style.display='none';}})}
return{init:init};})();ezRBA.init();</script>
<script type="text/javascript" data-cfasync="false">(function(){var addListeners=function(eltype,els){for(var en=0;en<els.length;en++){var el=els[en];if(el.complete==false||(typeof(el.readyState)!='undefined'&&el.readyState<4)){var src=el.getAttribute('src')||el.currentSrc;if(typeof(el.readyState)!='undefined'&&el.readyState==0){el.addEventListener('loadstart',function(e){var src=e.currentTarget.getAttribute('src')||e.currentSrc;window["ezorqs"](e,src);});}else{var src=el.getAttribute('src')||el.currentSrc;window["ezorqs"](el,src);}
el.addEventListener('load',function(e){var src=e.currentTarget.getAttribute('src')||e.srcElement.currentSrc;window["ezorqe"](e,src);});el.addEventListener('loadeddata',function(e){var src=e.currentTarget.getAttribute('src')||e.srcElement.currentSrc;window["ezorqe"](e,src);});el.addEventListener('error',function(e){var src=e.currentTarget.getAttribute('src')||e.srcElement.currentSrc;window["ezorqe"](e,src);});}}};var CssLoadedListeners=function(els){for(var en=0;en<els.length;en++){var el=els[en];if((el.getAttribute('rel')=='preload'||el.getAttribute('rel')=='stylesheet')&&el.getAttribute('href')!=null){if(isStyleSheetLoaded(el.getAttribute('href'))){window["ezorqs"](el,el.getAttribute('href'));var img=document.createElement('img');img.onerror=function(e){if(typeof e.path!="undefined"&&typeof e.path[0].currentSrc!="undefined"){window["ezorqe"](el,e.path[0].currentSrc);}else if(typeof e.srcElement!="undefined"&&typeof e.srcElement.href!="undefined"){window["ezorqe"](el,e.srcElement.href);}};img.src=el.getAttribute('href');}else{}}else{}}};function isStyleSheetLoaded(url){for(var i=0;i<document.styleSheets.length;i++){if(document.styleSheets[i].href==url){return true}}
return false;}
__ez_addAllListeners=function(){addListeners('img',document.querySelectorAll('img'));addListeners('video',document.querySelectorAll('video'));addListeners('audio',document.querySelectorAll('audio'));CssLoadedListeners(document.querySelectorAll('link'));if(typeof window["__ez"]["ssaf"]!="undefined"&&window["__ez"]["ssaf"].indexOf(16)>-1){if(typeof window["__ez"]["sshsdef"]!=="undefined"&&window["__ez"]["sshsdef"]===false){if(Element.prototype.addEventListener){if(typeof window["onload"]=="function"){window["addEventListener"]("load",window["onload"]);window["onload"]=null;}
if(typeof document["onload"]=="function"){document["addEventListener"].addEventListener("load",document["onload"]);document["onload"]=null;}}}}}
__ez.queue.addFunc("__ez_addAllListeners","__ez_addAllListeners",null,false,['/detroitchicago/tulsa.js'],true,true,true,true);}());</script>
<script data-ezscrex='false' data-pagespeed-no-defer data-cfasync='false' type='text/javascript' style='display:none'>
__ez_func_ezosuigeneris = function() { if(typeof ezosuigeneris != "undefined") { var ezosuigenerisDate = new Date(); ezosuigenerisDate.setMonth(ezosuigenerisDate.getMonth() + 24); __ez.ck.setByCat("ezosuigeneris=" + window.ezosuigeneris + ";expires=" + ezosuigenerisDate.toUTCString() + ";domain="+window.ezdomain+";path=/",3); } };
__ez.queue.addFunc('__ez_func_ezosuigeneris', '__ez_func_ezosuigeneris', null, false, ['__ezf_ezosuigeneris','/detroitchicago/boise.js'], true, false, false, false);
</script>
<script type="text/javascript" style='display:none;'>var __ez_dims = (function() {
		var setCookie = function( name, content, expiry ) {
			return document.cookie = name+'='+content+((expiry)?';expires='+(new Date(Math.floor(new Date().getTime()+expiry*1000)).toUTCString()):'')+';path=/';
		};
		var ffid = 1;
		var oh = window.screen.height;
		var ow = window.screen.width;
		var h = ffid === 1 ? oh : (oh > ow) ? oh : ow;
		var w = ffid === 1 ? ow : (oh > ow) ? ow : oh;
		var uh = window.innerHeight || document.documentElement.clientHeight || document.getElementsByTagName('body')[0].clientHeight;
		var uw = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
		setCookie('ezds', encodeURIComponent('ffid='+ffid+',w='+w+',h='+h), (31536e3*7));
		setCookie('ezohw', encodeURIComponent('w='+uw+',h='+uh), (31536e3*7));
	})();</script><script type='text/javascript' style='display:none;' async>
</script>
</body></html>
