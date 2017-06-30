import os


text_preguntas =["¿Fue útil el producto o servicio que le ofrecimos?"]
text_preguntas.append("¿Cómo percibe el profesionalismo de nuestra empresa?")
text_preguntas.append("¿El representante causó buena impresión?")
text_preguntas.append("¿El representante fue capaz de escuchar sus necesidades?")
text_preguntas.append("¿El representante siempre propuso soluciones a sus necesidades?")
text_preguntas.append("¿Hasta qué punto está de acuerdo con la preparación del representante?")
text_preguntas.append("¿Cuál es su impresión final del representante?")
text_preguntas.append("¿Cuál es su impresión final de la cita?")
text_preguntas.append("¿Cuál es su impresión final del producto o servicio presentado?")
num_preguntas = len(text_preguntas)
def genera_li():
	for i in range(1,num_preguntas+1):
		# print(i)
		genera = '<li>\n	<input type="hidden" name="id" value="'+str(i)+'">\n 	<input type="hidden" name="texto" value="'+text_preguntas[i-1]+'">\n		<div class="texto_div">'+text_preguntas[i-1]+'</div>\n		<div class="rating_div">\n			<div id="rateYo_'+str(i)+'"></div>\n		</div>\n	</div>\n</li>\n\n'
		print(genera)

# genera_li()
def genera_rate_js():
	for i in range(1,num_preguntas+1):
		genera = '$("#rateYo_'+str(i)+'").rateYo({\n			  	normalFill: "#868686",\n			  	ratedFill: "#0975b2",\n			  	starWidth:"30px",\n			  	// spacing: "5px",\n			    rating: 2,\n			    fullStar: true,\n			    precision: 2\n			  });\n\n'
		print(genera)

genera_rate_js()