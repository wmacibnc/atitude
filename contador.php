<div id="top" class="container">
			<div class="ccounter">
				<!-- 
				Altere as cores das barras de contagem e o tamanho dos círculos modificando os valores em "data-width" (largura/tamanho) e "data-fgColor" (cor da barra)
				-->
				<!-- CÍRCULO 1 - DIAS -->
				<div style="float:left;">
					<input class="knob days" data-width="80" data-min="0" data-max="365" data-displayPrevious=true data-fgColor="#8f2323" data-readOnly="true" value="1">
					</div>
				<div class="texto">Dias</div>
				<!-- CÍRCULO 2 - HORAS -->
				<div style="float:left;"><input class="knob hour" data-width="80" data-min="0" data-max="24" data-displayPrevious=true data-fgColor="#8f2323" data-readOnly="true" value="1"></div><div class="texto">Hor</div>
				<!-- CÍRCULO 2 - MINUTOS -->
				<div style="float:left;"><input class="knob minute" data-width="80" data-min="0" data-max="60" data-displayPrevious=true data-fgColor="#8f2323" data-readOnly="true" value="1"></div><div class="texto"">Min</div>
				<!-- CÍRCULO 2 - SEGUNDOS -->
				<div style="float:left;"><input class="knob second" data-width="80" data-min="0" data-max="60" data-displayPrevious=true data-fgColor="#8f2323" data-readOnly="true" value="0" data-bgcolor="#eee"></div><div class="texto">Seg</div>
			</div>	
		</div>
		
		<script>
			// Informe a data final da contagem no formato 
			$(".ccounter").ccountdown(2016,07,23,'19:00');
		</script>
    		
		<!-- FONTES DO GOOGLE : início -->
		<script type="text/javascript">
			var primary_font_code = 'Sintony:400,700:latin,latin-ext';
			var secondary_font_code = 'Bree+Serif::latin,latin-ext';
			var web_fonts = [primary_font_code];
			if(secondary_font_code != ''){
			    web_fonts.push(secondary_font_code);
			}
			
			WebFontConfig = {
			    google: { families: web_fonts }
			};
			(function() {
			    var wf = document.createElement('script');
			    wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
			    '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
			    wf.type = 'text/javascript';
			    wf.async = 'true';
			    var s = document.getElementsByTagName('script')[0];
			    s.parentNode.insertBefore(wf, s);
			})();
			
		</script>
		<!-- FONTES DO GOOGLE : fim -->