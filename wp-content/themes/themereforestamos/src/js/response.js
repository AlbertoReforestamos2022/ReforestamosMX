const responseObj = {
    "hola": "Hola... ¿En que te puedo ayudar? ",
    "Hola": "Hola... ¿En que te puedo ayudar? ",
    "hey" : "¿Cómo estás?",
    1 : 'Reforestación con empresa 🏙',
    2 : 'Marketing con causa 📱',
    3 : 'Voluntariado 🦺',
    4 : 'Donación de árboles 🌳',
    5 : 'Bolsa de Trabajo 👨‍👧',
    6 : 'Servicio Social 👨‍👧',
    7 : 'Centinelas del Tiempo 📗', 
    8 : 'Adopta un árbol 🌱',
    9 : '¿Cómo va mi arbolito? 🌲 (Este no va !)',
  };
  
  
  const tituloInfo = [ 
    'Nuestro horario de atención por este canal es de lunes a viernes de 9 am. a 6 pm. Después de este horario, al siguiente día atenderemos tu petición.',
    '🙅‍♂️ Nunca te voy a pedir información personal, tampoco la escribas ni mandes imágenes. Ej. Números de tarjetas de débito o crédito, contraseñas, NIP, etc. 🚫',
    'Nuestro aviso de privacidad ha sido actualizado, puedes consultarlo en: <a href="#">www.reforestamos.org/aviso-privacidad</a>',
    '¡Hola! ¡Qué bueno que escribes! ¿con qué opción te puedo ayudar?'
  ];
  
  const parrafosTitulos = [
    {numero: 1, parrafo: '🙅‍♂️ Nunca te voy a pedir información personal, tampoco la escribas ni mandes imágenes. Ej. Números de tarjetas de débito o crédito, contraseñas, NIP, etc. 🚫'},
    {numero: 2, parrafo: 'Nuestro aviso de privacidad ha sido actualizado, puedes consultarlo en: www.reforestamos.org/aviso-privacidad'},
    {numero: 3, parrafo: '¡Hola! ¿Con qué opción te puedo ayudar?'},
    {numero: 4, parrafo: 'Instrucciones: Escribe el número de acuerdo al tema de tu interés'}
  ]
  
  const listaOpciones = [
    {numero: 1, opcion: 'Voluntariado 🦺'},
    {numero: 2, opcion: 'Marketing con causa 📱'},
    {numero: 3, opcion: 'Adopta un árbol 🌱'},
    {numero: 4, opcion: 'Bolsa de trabajo 👨‍👧'},
    {numero: 5, opcion: 'Centinelas del Tiempo 📷'},
    {numero: 6, opcion: 'Compra y/o venta de árboles 🌳'},
    {numero: 7, opcion: 'Donar💰'},
    {numero: 8, opcion: 'Contacto ☎️'},
    {numero: 9, opcion: 'Eventos y convocatorias 📝'}
  ]; 
  
  const listaVoluntariado = [
    {numero: 1, opcion: 'Reforestación corporativa'},
    {numero: 2, opcion: 'Voluntariado'}
  ];
  
  const listaMarketing = [
    {numero: 1, opcion: 'Campañas activas'},
    {numero: 2, opcion: '¿Cómo realizar una campaña?'}
  ];
  
  const listaAdopta  = [
    {numero: 1, opcion: '¿Cómo adoptar?'}
  ];
  
  const listaBolsa = [
    {numero: 1, opcion: 'Vacantes'},
    {numero: 2, opcion: 'Servicio social'}
  ]
  
  const listaCentinelas = [
    {numero: 1, opcion: 'Convocatoria 2023'},
    {numero: 2, opcion: 'Fotografías ganadoras edición 2022'},
    {numero: 3, opcion: 'Libro Centinelas del Tiempo'}
  ]
  
  const listaCompra = [
  
  ]
  
  const listaDonar = [
    {numero: 1, opcion: '¿Cómo donar?'},
    {numero: 2, opcion: '¿Para qué se utilizará mi donativo?'},
    {numero: 3, opcion: '¿Cómo obtener mi recibo deducible de impuestos?'}
  ]
  
  const listaContacto = [
    {numero: 1, opcion: 'Horario de atención'},
    {numero: 2, opcion: 'Número telefónico'},
    {numero: 3, opcion: 'Oficinas'},
    {numero: 4, opcion: 'Directorio'}
  ]
  
  const listaEventos = [
    {numero: 1, opcion: 'Próximos eventos'},
    {numero: 2, opcion: 'Convocatorias activas'}
  ]