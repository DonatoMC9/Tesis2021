new Morris.Line({
  // ID del elemento en el que dibujar el gráfico.
  element: 'postulante_1',
  // Registros de datos del gráfico: cada entrada de esta matriz corresponde a un punto del gráfico.
  data: [
    { var: 'Form_Acad', pts: 0.5 },
    { var: 'Exp_Gral', pts: 0.4 },
    { var: 'Exp_Area', pts: 0.2 },
    { var: 'Entre', pts: 0.6 },
    { var: 'Cono_Area', pts: 0.8 },
    { var: 'Com', pts: 0.4 },
    { var: 'Voc', pts: 0.3 },
    { var: 'Apren', pts: 0.9 },
    { var: 'Val', pts: 0.7 },
    { var: 'Mor', pts: 0.8 },
    { var: 'Leg', pts: 0.6 },
    { var: 'Indif', pts: 0.2 },
    { var: 'Corr', pts: 0.1 },
    { var: 'Int_Eco', pts: 0.2 },
    { var: 'Int_Pol', pts: 0.3 },
    { var: 'Int_Soc', pts: 0.8 },
    { var: 'Int_Rel', pts: 0.5 },
  ],
  // El nombre del atributo del registro de datos que contiene valores X.
  xkey: 'var',
  // Una lista de nombres de atributos de registros de datos que contienen valores Y.
  ykeys: ['pts'],
  // Etiquetas para las teclas Y: se mostrarán cuando pase el cursor sobre el gráfico.
  labels: ['Pts.'],
  //Redimenciona el gráfico para distintos dispositivos.
  resize: true,
  //Cambia el color de la línea.
  lineColors: ['#1597BB'],
  //Cambia el grosor de la línea.
  lineWidth: 3,
  //Valor Maximo de las Verticales Y
  ymax: 1,
  //Esconde los cuadros de datos por defecto
  hideHover: true,
  //Elimina la opcion por defecto de que sean años los valores en X
  parseTime: false,
})

new Morris.Line({
  // ID del elemento en el que dibujar el gráfico.
  element: 'postulante_2',
  // Registros de datos del gráfico: cada entrada de esta matriz corresponde a un punto del gráfico.
  data: [
    { var: 'Form_Acad', pts: 0.7 },
    { var: 'Exp_Gral', pts: 0.6 },
    { var: 'Exp_Area', pts: 0.8 },
    { var: 'Entre', pts: 0.5 },
    { var: 'Cono_Area', pts: 0.8 },
    { var: 'Com', pts: 0.7 },
    { var: 'Voc', pts: 0.9 },
    { var: 'Apren', pts: 0.9 },
    { var: 'Val', pts: 0.7 },
    { var: 'Mor', pts: 0.6 },
    { var: 'Leg', pts: 0.6 },
    { var: 'Indif', pts: 0.4 },
    { var: 'Corr', pts: 0.2 },
    { var: 'Int_Eco', pts: 0.3 },
    { var: 'Int_Pol', pts: 0.6 },
    { var: 'Int_Soc', pts: 0.6 },
    { var: 'Int_Rel', pts: 0.4 },
  ],
  // El nombre del atributo del registro de datos que contiene valores X.
  xkey: 'var',
  // Una lista de nombres de atributos de registros de datos que contienen valores Y.
  ykeys: ['pts'],
  // Etiquetas para las teclas Y: se mostrarán cuando pase el cursor sobre el gráfico.
  labels: ['Pts.'],
  //Redimenciona el gráfico para distintos dispositivos.
  resize: true,
  //Cambia el color de la línea.
  lineColors: ['#4E9F3D'],
  //Cambia el grosor de la línea.
  lineWidth: 3,
  //Valor Maximo de las Verticales Y
  ymax: 1,
  //Esconde los cuadros de datos por defecto
  hideHover: true,
  //Elimina la opcion por defecto de que sean años los valores en X
  parseTime: false,
});

Morris.Line({
  // ID del elemento en el que dibujar el gráfico.
  element: 'postulante_3',
  // Registros de datos del gráfico: cada entrada de esta matriz corresponde a un punto del gráfico.
  data: [
    { var: 'Form_Acad', pts1: 0.5, pts2: 0.7 },
    { var: 'Exp_Gral', pts1: 0.4, pts2: 0.6 },
    { var: 'Exp_Area', pts1: 0.2, pts2: 0.8 },
    { var: 'Entre', pts1: 0.6, pts2: 0.5 },
    { var: 'Cono_Area', pts1: 0.8, pts2: 0.8 },
    { var: 'Com', pts1: 0.4, pts2: 0.7 },
    { var: 'Voc', pts1: 0.3, pts2: 0.6 },
    { var: 'Apren', pts1: 0.9, pts2: 0.6 },
    { var: 'Val', pts1: 0.7, pts2: 0.4 },
    { var: 'Mor', pts1: 0.8, pts2: 0.6 },
    { var: 'Leg', pts1: 0.6, pts2: 0.6 },
    { var: 'Indif', pts1: 0.2, pts2: 0.4 },
    { var: 'Corr', pts1: 0.1, pts2: 0.2 },
    { var: 'Int_Eco', pts1: 0.2, pts2: 0.3 },
    { var: 'Int_Pol', pts1: 0.3, pts2: 0.6 },
    { var: 'Int_Soc', pts1: 0.8, pts2: 0.6 },
    { var: 'Int_Rel', pts1: 0.5, pts2: 0.4 },
  ],
  // El nombre del atributo del registro de datos que contiene valores X.
  xkey: 'var',
  // Una lista de nombres de atributos de registros de datos que contienen valores Y.
  ykeys: ['pts1', 'pts2'],
  // Etiquetas para las teclas Y: se mostrarán cuando pase el cursor sobre el gráfico.
  labels: ['Pts1.', 'Pts2.'],
  //Redimenciona el gráfico para distintos dispositivos.
  resize: true,
  //Cambia el color de la línea.
  lineColors: ['#1597BB', '#4E9F3D'],
  //Cambia el grosor de la línea.
  lineWidth: 3,
  //Valor Maximo de las Verticales Y
  ymax: 1,
  //Esconde los cuadros de datos por defecto
  hideHover: true,
  //Elimina la opcion por defecto de que sean años los valores en X
  parseTime: false
});
