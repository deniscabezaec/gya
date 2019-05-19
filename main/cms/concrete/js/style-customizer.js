!function(a,b){"use strict";function c(a,c){var d=this;c=b.extend({inputName:!1,unit:"px",appendTo:document.body},c),d.options=c,d.opened=!1,d.$element=a,d.$container=b(d.options.appendTo),d._chooseTemplate=_.template(d.chooseTemplate,{options:d.options,i18n:ccmi18n}),d._selectorTemplate=_.template(d.selectorWidgetTemplate,{options:d.options,i18n:ccmi18n}),d.$element.append(d._chooseTemplate),d.$widget=b(d._selectorTemplate),d.$container.append(d.$widget),d.$widget.find(".launch-tooltip").tooltip(),d.$widget.find("div.ccm-style-customizer-palette-actions button").on("click.style-customizer-palette",function(a){return d.save(a),!1}),d.$element.on("click.style-customizer-palette","[data-launch=style-customizer-palette]",function(a){if(d.opened)d.closeSelector(a);else{var c=d.getPosition();d.$widget.css({top:c.top,left:c.left}).show().on("click.style-customizer-palette",function(a){a.stopPropagation()}),b(document).on("click.style-customizer-palette",function(a){d.closeSelector(a)}),d.opened=!0}return!1})}c.prototype={setValue:function(a,b){var c=this;c.$element.find("input[data-style-customizer-input="+a+"]").val(b)},getPosition:function(){var a=this,b=a.getOffset(a.$widget,a.$element);return b},getOffset:function(a,c){var d=-5,e=a.outerWidth(),f=a.outerHeight(),g=c.outerHeight(),h=a[0].ownerDocument,i=h.documentElement,j=i.clientWidth+b(h).scrollLeft(),k=i.clientHeight+b(h).scrollTop(),l=c.offset();return l.top+=g,l.left-=Math.min(l.left,l.left+e>j&&j>e?Math.abs(l.left+e-j):0),l.top-=Math.min(l.top,l.top+f>k&&k>f?Math.abs(f+g-d):d),l},getValue:function(a){var b=this;return b.$element.find("input[data-style-customizer-input="+a+"]").val()},closeSelector:function(a){var c=this;c.$widget.hide(),c.opened=!1,b(document).unbind("click.style-customizer-palette")},updateSwatch:function(){window.alert("You must implement this method updateSwatch.")},save:function(a){var b=this;b.updateSwatch(),b.closeSelector(a),ConcreteEvent.publish("StyleCustomizerControlUpdate")}},a.ConcreteStyleCustomizerPalette=c}(this,jQuery),function(a,b){"use strict";function c(a,c){var d=this;c=b.extend({inputName:!1,value:!1},c),ConcreteStyleCustomizerPalette.call(d,a,c),d.$widget.find("div[data-style-customizer-field=image]").concreteFileSelector({inputName:d.options.inputName})}c.prototype=Object.create(ConcreteStyleCustomizerPalette.prototype),c.prototype.chooseTemplate='<span data-launch="style-customizer-palette" class="ccm-style-customizer-display-swatch"><input type="hidden" value="<%=options.value%>" name="<%=options.inputName%>[image]" data-style-customizer-input="image" /><span class="ccm-ui"><i class="fa fa-picture-o"></i></span></span>',c.prototype.selectorWidgetTemplate='<div class="ccm-ui ccm-style-customizer-palette"><% if (options.value) { %><div><label><%=i18n.currentImage%></label><div><img style="width: 100%" src="<%=options.value%>" /></div></div><% } %><div><label><%=i18n.image%></label><div data-style-customizer-field="image" class="ccm-file-selector"></div></div><div class="ccm-style-customizer-palette-actions"><button class="btn btn-primary"><%=i18n.save%></button></div></div>',c.prototype.save=function(a){var b,c=this,d=c.$widget.find("div.ccm-file-selector-file-selected");d.length&&(b=d.find("input[type=hidden]").val()),c.setValue("image",b),ConcreteEvent.publish("StyleCustomizerControlUpdate"),c.closeSelector(a)},b.fn.concreteStyleCustomizerImageSelector=function(a){return b.each(b(this),function(d,e){new c(b(this),a)})},a.ConcreteStyleCustomizerImageSelector=c}(this,jQuery),function(a,b){"use strict";function c(a,c){var d=this,e=1;c=b.extend({inputName:!1,unit:"px",value:0,appendTo:document.body},c),ConcreteStyleCustomizerPalette.call(d,a,c),d.$slider=d.$widget.find("div.ccm-style-customizer-slider"),"em"==d.options.unit&&(e=.1),d.$slider.slider({min:0,max:1e3,step:e,value:d.options.value,create:function(a,c){b(this).parent().find("span").html(d.options.value+d.options.unit)},slide:function(a,c){b(this).parent().find("span").html(c.value+d.options.unit)}})}c.prototype=Object.create(ConcreteStyleCustomizerPalette.prototype),c.prototype.chooseTemplate='<span data-launch="style-customizer-palette"><input type="hidden" name="<%=options.inputName%>[size]" value="<%=options.value%>" data-style-customizer-input="size" /><input type="hidden" name="<%=options.inputName%>[unit]" value="<%=options.unit%>" /><span><%=options.value + options.unit%></span></span>',c.prototype.selectorWidgetTemplate='<div class="ccm-ui ccm-style-customizer-palette ccm-style-customizer-palette-large"><div><label><%=i18n.size%></label><div data-style-customizer-field="size"><div class="ccm-style-customizer-slider"></div><span class="ccm-style-customizer-slider-value"><%=options.value%><%=options.unit%></span></div></div><div class="ccm-style-customizer-palette-actions"><button class="btn btn-primary"><%=i18n.save%></button></div></div>',c.prototype.updateSwatch=function(){var a=this,b=a.$element.find("span[data-launch=style-customizer-palette] span");b.html(a.getValue("size")+a.options.unit)},c.prototype.save=function(a){var b=this;b.setValue("size",b.$widget.find("div[data-style-customizer-field=size] div.ccm-style-customizer-slider").slider("value")),b.updateSwatch(),ConcreteEvent.publish("StyleCustomizerControlUpdate"),b.closeSelector(a)},b.fn.concreteSizeSelector=function(a){return b.each(b(this),function(d,e){new c(b(this),a)})},a.ConcreteSizeSelector=c}(this,jQuery),function(a,b){"use strict";function c(a,b){return this instanceof c==!1?new c(a,b):(this.display=a,void(this.css=b))}function d(a,d){var e,f,g=this;if(d=b.extend({inputName:!1,fontFamily:-1,color:-1,italic:-1,underline:-1,uppercase:-1,fontSizeValue:-1,fontSizeUnit:"px",fontWeight:-1,letterSpacingValue:-1,letterSpacingUnit:"px",lineHeightValue:-1,lineHeightUnit:"px"},d),ConcreteStyleCustomizerPalette.call(g,a,d),g.$fontMenu=g.$widget.find("select[data-style-customizer-field=font]"),g.$sliders=g.$widget.find("div.ccm-style-customizer-slider"),g.$sliders.slider({min:0,max:64,value:0,create:function(a,c){b(this).parent().find("span.ccm-style-customizer-slider-value span.ccm-style-customizer-number").html("0")},slide:function(a,c){b(this).parent().find("span.ccm-style-customizer-slider-value span.ccm-style-customizer-number").html(c.value)}}),g.$colorpicker=g.$widget.find("input[data-style-customizer-field=color]"),g.$colorpicker.spectrum({preferredFormat:"rgb",showAlpha:!0,className:"ccm-widget-colorpicker",showInitial:!0,showInput:!0}),g.$fontMenu.on("change",function(){var a=g.fonts[b(this).val()];b(this).css("font-family",a)}),b.each(g.fonts,function(a,b){g.$fontMenu.append('<option value="'+b+'">'+b+"</option>")}),g.options.fontFamily!=-1){var h=g.options.fontFamily.split(",")[0].replace("'","").replace("'","");"undefined"==typeof g.fonts[h]&&(g.fonts[h]=new c(h,g.options.fontFamily),g.$fontMenu.append(b("<option>",{value:h,text:h}))),g.setValue("font-family",g.fonts[h].css),g.$fontMenu.val(h),g.$fontMenu.css("font-family",g.fonts[h].css)}else g.$widget.find("[data-wrapper=fontFamily]").html(""),g.$element.find("[data-wrapper=fontFamily]").remove();g.options.color!=-1?(g.$colorpicker.spectrum("set",g.options.color),g.setValue("color",g.options.color)):(g.$widget.find("[data-wrapper=color]").remove(),g.$element.find("[data-wrapper=color]").remove()),g.options.underline!=-1?(g.$widget.find("input[data-style-customizer-field=underline]").prop("checked",g.options.underline),g.setValue("underline",g.options.underline?1:0)):(g.$widget.find("[data-wrapper=underline]").remove(),g.$element.find("[data-wrapper=underline]").remove()),g.options.uppercase!=-1?(g.$widget.find("input[data-style-customizer-field=uppercase]").prop("checked",g.options.uppercase),g.setValue("uppercase",g.options.uppercase?1:0)):(g.$widget.find("[data-wrapper=uppercase]").remove(),g.$element.find("[data-wrapper=uppercase]").remove()),g.options.italic!=-1?(g.$widget.find("input[data-style-customizer-field=italic]").prop("checked",g.options.italic),g.setValue("italic",g.options.italic?1:0)):(g.$widget.find("[data-wrapper=italic]").remove(),g.$element.find("[data-wrapper=italic]").remove()),g.options.fontSizeValue!=-1?(e=g.$widget.find("div[data-style-customizer-field=font-size]"),f=e.find("div.ccm-style-customizer-slider"),f.slider("value",g.options.fontSizeValue),"em"==g.options.fontSizeUnit&&(f.slider("option","step",.1),f.slider("option","max",10)),e.find("span.ccm-style-customizer-slider-value span.ccm-style-customizer-number").html(g.options.fontSizeValue),e.find("span.ccm-style-customizer-slider-value span.ccm-style-customizer-unit").html(g.options.fontSizeUnit),g.setValue("font-size",g.options.fontSizeValue)):(g.$widget.find("[data-wrapper=fontSize]").remove(),g.$element.find("[data-wrapper=fontSize]").remove()),g.options.fontWeight!=-1?(e=g.$widget.find("div[data-style-customizer-field=font-weight]"),f=e.find("div.ccm-style-customizer-slider"),f.slider("option","step",100),f.slider("option","max",900),f.slider("option","min",100),f.slider("value",g.options.fontWeight),e.find("span.ccm-style-customizer-slider-value span.ccm-style-customizer-number").html(g.options.fontWeight),g.setValue("font-weight",g.options.fontWeight)):(g.$widget.find("[data-wrapper=fontWeight]").remove(),g.$element.find("[data-wrapper=fontWeight]").remove()),g.options.letterSpacingValue!=-1?(e=g.$widget.find("div[data-style-customizer-field=letter-spacing]"),f=e.find("div.ccm-style-customizer-slider"),f.slider("value",g.options.letterSpacingValue),"em"==g.options.letterSpacingUnit&&(f.slider("option","step",.1),f.slider("option","max",10)),e.find("span.ccm-style-customizer-slider-value span.ccm-style-customizer-number").html(g.options.letterSpacingValue),e.find("span.ccm-style-customizer-slider-value span.ccm-style-customizer-unit").html(g.options.letterSpacingUnit),g.setValue("letter-spacing",g.options.letterSpacingValue)):(g.$widget.find("[data-wrapper=letterSpacing]").remove(),g.$element.find("[data-wrapper=letterSpacing]").remove()),g.options.lineHeightValue!=-1?(e=g.$widget.find("div[data-style-customizer-field=line-height]"),f=e.find("div.ccm-style-customizer-slider"),f.slider("value",g.options.lineHeightValue),"em"==g.options.lineHeightUnit&&(f.slider("option","step",.1),f.slider("option","max",10)),e.find("span.ccm-style-customizer-slider-value span.ccm-style-customizer-number").html(g.options.lineHeightValue),e.find("span.ccm-style-customizer-slider-value span.ccm-style-customizer-unit").html(g.options.lineHeightUnit),g.setValue("line-height",g.options.lineHeightValue)):(g.$widget.find("[data-wrapper=lineHeight]").remove(),g.$element.find("[data-wrapper=lineHeight]").remove()),g.updateSwatch()}c.prototype.toString=function(){return this.display},d.prototype=Object.create(ConcreteStyleCustomizerPalette.prototype),d.prototype.fonts={Arial:new c("Arial","Arial, sans-serif"),Helvetica:new c("Helvetica","Helvetica, sans-serif"),Georgia:new c("Georgia","Georgia, serif"),Verdana:new c("Verdana","Verdana, sans-serif"),"Trebuchet MS":new c("Trebuchet MS","Trebuchet MS, sans-serif"),"Book Antiqua":new c("Book Antiqua","Book Antiqua, serif"),Tahoma:new c("Tahoma","Tahoma, sans-serif"),"Times New Roman":new c("Times New Roman","Times New Roman, serif"),"Courier New":new c("Courier New","Courier New, monospace"),"Arial Black":new c("Arial Black","Arial Black, sans-serif"),"Comic Sans MS":new c("Comic Sans MS","Comic Sans MS, sans-serif")},d.prototype.chooseTemplate='<span class="ccm-style-customizer-display-swatch" data-launch="style-customizer-palette"><div data-wrapper="fontFamily"><input type="hidden" name="<%=options.inputName%>[font-family]" data-style-customizer-input="font-family" /></div><div data-wrapper="color"><input type="hidden" name="<%=options.inputName%>[color]" data-style-customizer-input="color" /></div><div data-wrapper="italic"><input type="hidden" name="<%=options.inputName%>[italic]" data-style-customizer-input="italic" /></div><div data-wrapper="underline"><input type="hidden" name="<%=options.inputName%>[underline]" data-style-customizer-input="underline" /></div><div data-wrapper="uppercase"><input type="hidden" name="<%=options.inputName%>[uppercase]" data-style-customizer-input="uppercase" /></div><div data-wrapper="fontWeight"><input type="hidden" name="<%=options.inputName%>[font-weight]" data-style-customizer-input="font-weight" /></div><div data-wrapper="fontSize"><input type="hidden" name="<%=options.inputName%>[font-size][size]" data-style-customizer-input="font-size" /><input type="hidden" name="<%=options.inputName%>[font-size][unit]" value="<%=options.fontSizeUnit%>" /></div><div data-wrapper="letterSpacing"><input type="hidden" name="<%=options.inputName%>[letter-spacing][size]" data-style-customizer-input="letter-spacing" /><input type="hidden" name="<%=options.inputName%>[letter-spacing][unit]" value="<%=options.letterSpacingUnit%>" /></div><div data-wrapper="lineHeight"><input type="hidden" name="<%=options.inputName%>[line-height][size]" data-style-customizer-input="line-height" /><input type="hidden" name="<%=options.inputName%>[line-height][unit]" value="<%=options.lineHeightUnit%>" /></div><span>T</span></span>',d.prototype.selectorWidgetTemplate='<div class="ccm-ui ccm-style-customizer-palette"><div><select data-style-customizer-field="font" data-wrapper="fontFamily"><option value=""><%=i18n.chooseFont%></option></select> <span data-wrapper="color"><input type="text" data-style-customizer-field="color"></span></div><div data-wrapper="italic" class="checkbox"><label><input type="checkbox" class="ccm-flat-checkbox" data-style-customizer-field="italic"> <%=i18n.italic%></label></div><div data-wrapper="underline" class="checkbox"><label><input type="checkbox" class="ccm-flat-checkbox" data-style-customizer-field="underline"> <%=i18n.underline%></label></div><div data-wrapper="uppercase" class="checkbox"><label><input type="checkbox" class="ccm-flat-checkbox" data-style-customizer-field="uppercase"> <%=i18n.uppercase%></label></div><div data-wrapper="fontSize"><label><%=i18n.fontSize%></label><div data-style-customizer-field="font-size"><div class="ccm-style-customizer-slider"></div><span class="ccm-style-customizer-slider-value"><span class="ccm-style-customizer-number"></span><span class="ccm-style-customizer-unit">px</span></span></div></div><div data-wrapper="fontWeight"><label><%=i18n.fontWeight%> <i class="fa fa-question-circle launch-tooltip" title="400 = Normal, 700 = Bold"></i></label><div data-style-customizer-field="font-weight"><div class="ccm-style-customizer-slider"></div><span class="ccm-style-customizer-slider-value"><span class="ccm-style-customizer-number"></span></span></div></div><div data-wrapper="letterSpacing"><label><%=i18n.letterSpacing%></label><div data-style-customizer-field="letter-spacing"><div class="ccm-style-customizer-slider"></div><span class="ccm-style-customizer-slider-value"><span class="ccm-style-customizer-number"></span><span class="ccm-style-customizer-unit">px</span></span></div></div><div data-wrapper="lineHeight"><label><%=i18n.lineHeight%></label><div data-style-customizer-field="line-height"><div class="ccm-style-customizer-slider"></div><span class="ccm-style-customizer-slider-value"><span class="ccm-style-customizer-number"></span><span class="ccm-style-customizer-unit">px</span></span></div></div><div class="ccm-style-customizer-palette-actions"><button class="btn btn-primary"><%=i18n.save%></button></div></div>',d.prototype.updateSwatch=function(){var a=this,b=a.$element.find("span.ccm-style-customizer-display-swatch");a.getValue("font-family")&&b.css("font-family",a.getValue("font-family")),a.getValue("color")&&b.css("color",a.getValue("color")),b.css("font-weight","inherit"),b.css("font-style","inherit"),b.css("text-decoration","inherit"),b.css("text-transform","inherit"),"1"===a.getValue("italic")&&b.css("font-style","italic"),"1"===a.getValue("underline")&&b.css("text-decoration","underline"),b.css("font-weight",a.getValue("font-weight")),"1"===a.getValue("uppercase")&&b.css("text-transform","uppercase"),b.css("font-size","14px")},d.prototype.save=function(a){var b=this;b.setValue("font-family",b.options.fontFamily!=-1?b.fonts[b.$fontMenu.val()].css:""),b.setValue("color",b.$widget.find("input[data-style-customizer-field=color]").spectrum("get")),b.setValue("italic",b.$widget.find("input[data-style-customizer-field=italic]").is(":checked")?"1":0),b.setValue("underline",b.$widget.find("input[data-style-customizer-field=underline]").is(":checked")?"1":0),b.setValue("uppercase",b.$widget.find("input[data-style-customizer-field=uppercase]").is(":checked")?"1":0),b.setValue("font-size",b.$widget.find("div[data-style-customizer-field=font-size] div.ccm-style-customizer-slider").slider("value")),b.setValue("font-weight",b.$widget.find("div[data-style-customizer-field=font-weight] div.ccm-style-customizer-slider").slider("value")),b.setValue("letter-spacing",b.$widget.find("div[data-style-customizer-field=letter-spacing] div.ccm-style-customizer-slider").slider("value")),b.setValue("line-height",b.$widget.find("div[data-style-customizer-field=line-height] div.ccm-style-customizer-slider").slider("value")),b.updateSwatch(),ConcreteEvent.publish("StyleCustomizerControlUpdate"),b.closeSelector(a)},b.fn.concreteTypographySelector=function(a){return b.each(b(this),function(c,e){new d(b(this),a)})},a.ConcreteTypographySelector=d}(this,jQuery),function(a,b){"use strict";function c(a,c){var d=this;c=b.extend({},c),d.options=c,d.$element=a,d.$toolbar=d.$element.find(">ul"),d.$toolbar.find("div.dropdown-menu").on("click",function(a){return!!b(a.target).is("button")||void a.stopPropagation()}),d.setupForm(),d.setupButtons(),d.setupSliders()}function d(a,b){var d=this;c.call(d,a,b)}function e(a,b){var d=this;c.call(d,a,b)}c.prototype={refreshStyles:function(a){a.oldIssID&&b("head").find("style[data-style-set="+a.oldIssID+"]").remove(),a.issID&&a.css&&b("head").append(a.css)},setupForm:function(){var a=this;a.$element.find(".launch-tooltip").tooltip(),a.$element.concreteAjaxForm({success:function(b){a.handleResponse(b)},error:function(b){a.$toolbar.prependTo("#ccm-inline-toolbar-container").show()}})},setupButtons:function(){var a=this;a.$toolbar.on("click.inlineStyleCustomizer","button[data-action=cancel-design]",function(){return a.$element.hide(),ConcreteEvent.fire("EditModeExitInline"),!1}),a.$toolbar.on("click.inlineStyleCustomizer","button[data-action=reset-design]",function(){return b.concreteAjax({url:b(this).attr("data-reset-action"),success:function(b){a.handleResponse(b)}}),!1}),a.$toolbar.on("click.inlineStyleCustomizer","button[data-action=save-design]",function(){return a.$toolbar.hide().prependTo(a.$element),a.$element.submit(),ConcreteEvent.unsubscribe("EditModeExitInlineComplete"),!1})},setupSliders:function(){var a=this;a.$toolbar.find(".ccm-inline-style-sliders").each(function(){var a=b(this).next().children(".ccm-inline-style-slider-value"),c=a.attr("data-value-format"),d=b(this),e=parseInt(b(this).attr("data-style-slider-min")),f=parseInt(b(this).attr("data-style-slider-max")),g=b(this).attr("data-style-slider-default-setting"),h=function(){return parseInt(a.val().replace(/\D\-/g,""))},i=function(){(parseInt(g)===h()||isNaN(h()))&&a.prop("disabled",!0).val(g+c)};d.slider({min:e,max:f,value:h(),slide:function(b,d){a.prop("disabled",!1),a.val(d.value+c),i()}}),a.change(function(){var a=h();a>f?a=f:a<e?a=e:isNaN(a)&&(a=g),b(this).val(a+c),d.slider("value",a),i()}).blur(function(){i()}).parent().click(function(){a.prop("disabled")&&a.prop("disabled",!1).select()}),i()})}},d.prototype=Object.create(c.prototype),d.prototype.handleResponse=function(a){var c=this,d=new Concrete.getEditMode,e=d.getAreaByID(a.aID),f=e.getBlockByID(parseInt(a.originalBlockID)),g=e.getEnableGridContainer()?1:0,h=CCM_DISPATCHER_FILENAME+"/ccm/system/block/render";b.get(h,{arHandle:e.getHandle(),cID:a.cID,bID:a.bID,arEnableGridContainer:g},function(e){ConcreteToolbar.disableDirectExit();var g=f.replace(e);ConcreteAlert.notify({message:a.message}),c.refreshStyles(a),ConcreteEvent.fire("EditModeExitInline",{action:"save_inline",block:g}),ConcreteEvent.fire("EditModeExitInlineComplete",{block:g}),b.fn.dialog.hideLoader(),d.destroyInlineEditModeToolbars(),d.scanBlocks()})},e.prototype=Object.create(c.prototype),e.prototype.handleResponse=function(a){var b=this,c=new Concrete.getEditMode,d=c.getAreaByID(a.aID);b.refreshStyles(a),d.getElem().removeClassExcept("ccm-area ccm-global-area"),a.containerClass&&d.getElem().addClass(a.containerClass),c.destroyInlineEditModeToolbars()},b.fn.concreteBlockInlineStyleCustomizer=function(a){return b.each(b(this),function(c,e){new d(b(this),a)})},b.fn.concreteAreaInlineStyleCustomizer=function(a){return b.each(b(this),function(c,d){new e(b(this),a)})},b.fn.removeClassExcept=function(a){return this.each(function(c,d){for(var e=a.split(" "),f=[],g=b(d),h=0;h<e.length;h++)g.hasClass(e[h])&&f.push(e[h]);g.removeClass().addClass(f.join(" "))})},a.ConcreteBlockInlineStyleCustomizer=d,a.ConcreteAreaInlineStyleCustomizer=e}(this,jQuery);