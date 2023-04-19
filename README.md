ANDRÉS PÉREZ CARO

INGENIERÍA DE LA SALUD

INDICE:

Dominio del problema

Objetivos

Usuarios del sistema

Requisitos de información

Requisitos no funcionales

Requisitos funcionales

Reglas de negocio

Modelado conceptual UML

==============================================================
DOMINIO DEL PROBLEMA:
Encontramos ciertos problemas que las farmacias no solucionan, vamos a enumerarlos a continuación:

En algunos casos al asistir a las farmacias con el objetivo de realizar la compra de algún medicamento o cierto material sanitario, por ejemplo, test de Covid-19, nos encontramos ante el problema de no encontrarlo en algunas de las farmacias a las que asistimos.

Otros de los problemas que observamos es, a la hora de asistir a la farmacia por alguna urgencia, de madrugada, no sabemos nunca la farmacia que se encuentra de guardia.

Por último, otro de los problemas, es la asistencia de las personas con movilidad reducida para asistir a recoger sus medicamentos y la dependencia hacía otras personas para que lo recojan.

OBJETIVOS:

• OBJ-1. Gestión de stocks: Se deberán enumerar las farmacias cercanas que tengan stock disponible del medicamento que necesitemos.

• OBJ-2. Gestión de recetas: Se deberá dar accesibilidad a los médicos a la tarjeta sanitaria de los clientes para recetarle ciertos medicamentos.

• OBJ-3: Gestión de apertura: Se deberán enumerar las farmacias que vayan a estar de guardia.

• OBJ-4: Gestión de movilidad: Las personas con movilidad reducida deberán presentar su acreditación para solicitar las entregas a domicilio de los medicamentos.

• OBJ-5: Gestión de pacientes: Cada paciente se podrá registrar y podrá acceder a cierta información sobre las farmacias y sus medicamentos.

• OBJ-6: Gestión de historial clínico: Los médicos deberán revisar los historiales clínicos de los pacientes antes de realizar alguna receta de medicamentos.

USUARIOS DEL SISTEMA:
• FARMACEUTICOS: personal encargado de la farmacia y de las ventas de los medicamentos.

• AUXILIARES DE FARMACIA: personal de la farmacia que tienen permitido vender medicamentos bajo la supervisión de los farmacéuticos.

• CLIENTE: pacientes que desean adquirir medicamentos de la farmacia.

• MÉDICO: especialistas que tienen la posibilidad de recetar medicamentos a los pacientes.

• REPARTIDOR: personal encargado de los envíos a domicilios a personas con movilidad reducida.

REQUSITOS DE INFORMACION:
• RI-1. Medicamentos: El sistema deberá almacenar la siguiente información sobre los medicamentos: nombre y miligramos que pese.

Cada medicamento podrá ser recetado a muchos pacientes, cada una de esas recetas tendrá una fecha y una hora.

• RI-2. Recetas: El sistema deberá almacenar la siguiente información sobre las recetas: descripción, fecha y hora.

Cada receta será recetada por un médico hacia un paciente y tendrá algunos medicamentos especificados.

• RI-3. Personal: El sistema deberá almacenar la siguiente información sobre el personal de las farmacias: nombre, apellidos, dirección, teléfono, correo electrónico, especialidad y DNI.

Cada personal tendrá una farmacia y un usuario asociado, a su vez, dependiendo de la especialidad del personal, podrá o no recetar medicamentos a los pacientes.

• RI-4. Clientes: El sistema deberá almacenar la siguiente información sobre los clientes de las farmacias: nombre, apellidos, dirección, teléfono, correo electrónico, n.º seguridad social y DNI.

Cada cliente puede tener varias farmacias asociadas, tendrá un usuario y puede tener varias recetas de médicos.

• RI-5. Proveedores: El sistema deberá almacenar la siguiente información sobre los proveedores de las farmacias: nombre, correo electrónico, teléfono y dirección.

Cada proveedor tendrá un medicamento asociado y podrá suministrar medicamentos a varias farmacias.

• RI-6. Farmacias: El sistema deberá almacenar la siguiente información sobre las farmacias: nombre, teléfono e indicará si se encuentra abierto.

Cada farmacia tendrá asociado un personal, unos clientes, proveedores y medicamentos.

REQUISITOS NO FUNCIONALES:
• RNF-1: El sistema denegará el acceso a personas que no tengan un usuario registrado

• RNF-2: El sistema deberá estar disponible cuando sea necesario

• RNF-3: El sistema deberá contar con un dispositivo de atención al cliente.

• RNF-4: El sistema deberá permitir el cambio de idioma entre: español, inglés y alemán

REQUISITOS FUNCIONALES:
• RF-1: El sistema deberá ser capaz de hacer un listado en cada farmacia de los medicamentos que se encuentren disponibles.

• RF-2: El sistema deberá permitir a los médicos acceder a la tarjeta sanitaria de los clientes y añadir o eliminar medicamentos en esta.

• RF-3: El sistema deberá hacer un listado de los horarios de apertura y cierre de las farmacias.

• RF-4: El sistema deberá autenticar las acreditaciones de movilidad reducida.

• RF-5: El sistema deberá permitir registrarse a los pacientes, añadiendo un email y una contraseña.

• RF-6: El sistema deberá permitir realizar filtros de búsqueda a los médicos dentro de los historiales clínicos de sus pacientes.

REGLAS DE NEGOCIO:
• RN-1: Si en un pedido se realiza la compra de dos packs de un producto, el segundo se cobrará únicamente el 50% del precio.

• RN-2: Si el pedido a domicilio de personas con movilidad reducida pasa el coste de 50€, el envío será gratuito.

• RN-3: Si al cliente con movilidad reducida no le llega el envío en el tiempo estipulado se le realizará un descuento del 25% del coste final en el siguiente pedido que realice.

• RN-4: Si el cliente tiene un problema con la aplicación web y contacta con atención al cliente, este debe recibir respuesta de atención al cliente como máximo en 24 horas.

MODELO CONCEPTUAL UML:
Imagen 1