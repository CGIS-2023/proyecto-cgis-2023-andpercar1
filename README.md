APLICACIÓN WEB: 
FARMACIAS 
CODIFICACIÓN Y GESTIÓN DE LA INFORMACIÓN SANITARIA

ANDRÉS PÉREZ CARO

INGENIERÍA DE LA SALUD
 
INDICE:

1.	Dominio del problema

2.	Objetivos

3.	Usuarios del sistema

4.	Requisitos de información

5.	Requisitos no funcionales

6.	Requisitos funcionales

7.	Reglas de negocio

8.	Modelado conceptual UML



==============================================================================================


1.	DOMINIO DEL PROBLEMA:


Encontramos ciertos problemas que las farmacias no solucionan, vamos a enumerarlos a continuación:

1.	En algunos casos al asistir a las farmacias con el objetivo de realizar la compra de algún medicamento o cierto material sanitario, por ejemplo, test de       Covid-19, nos encontramos ante el problema de no encontrarlo en algunas de las farmacias a las que asistimos.

2.	Otros de los problemas que observamos es, a la hora de asistir a la farmacia por alguna urgencia, de madrugada, no sabemos nunca la farmacia que se encuentra de guardia.

2.	OBJETIVOS:

•	OBJ-1. Gestión de stocks:
Se deberán enumerar las farmacias cercanas que tengan stock disponible del medicamento que necesitemos.

•	OBJ-2. Gestión de recetas:
Se deberá dar accesibilidad a los médicos a la tarjeta sanitaria de los clientes para recetarle ciertos medicamentos.

•	OBJ-3: Gestión de apertura:
Se deberán enumerar las farmacias que vayan a estar abierta.

•	OBJ-4: Gestión de pacientes:
Cada paciente se podrá registrar y podrá acceder a cierta información sobre las farmacias y sus medicamentos.

3.	USUARIOS DEL SISTEMA:

•	SANITARIOS: personal encargado de la farmacia y/o de recetar ciertos medicamentos a los pacientes.

•	CLIENTE: pacientes que desean adquirir medicamentos de la farmacia. Solo podrá visualizar el listado de farmacias y de medicamentos, además de ver si se encuentran abiertas las farmacias y poder ver que medicamentos se encuentra en cada farmacia

•	ADMINISTRADOR

4.	REQUSITOS DE INFORMACION:

•	RI-1. Medicamentos: El sistema deberá almacenar la siguiente información sobre los medicamentos: nombre y miligramos que pese.

Cada medicamentos podrán encontrarse en muchas farmacias, estos tendrán un código de stock. Y cada uno de estos medicamentos podrá ser realizado por varios proveedores.

•	RI-2. Sanitario: El sistema deberá almacenar la siguiente información sobre el personal sanitario: nombre, apellidos, teléfono y DNI.

Cada sanitario tendrá una farmacia y un usuario asociado.

•	RI-3. Clientes: El sistema deberá almacenar la siguiente información sobre los clientes de las farmacias: nombre, apellidos, DNI, teléfono, n.º seguridad social y direccion.

Cada cliente puede tener varias farmacias asociadas y tendrá un usuario.
 

•	RI-4. Proveedores: El sistema deberá almacenar la siguiente información sobre los proveedores de las farmacias: nombre, email, teléfono y dirección.

              Cada proveedor tendrá un medicamento asociado y podrá suministrar a                               
              varias farmacias, donde se guardará la fecha del pedido.

•	RI-5. Farmacias: El sistema deberá almacenar la siguiente información sobre las farmacias: nombre, teléfono e indicará si se encuentra abierto.

             Cada farmacia tendrá asociado unos sanitarios, unos clientes, proveedores y medicamentos.

5.	REQUISITOS NO FUNCIONALES:

•	RNF-1: El sistema denegará el acceso a personas que no tengan un usuario registrado

•	RNF-2: El sistema deberá estar disponible cuando sea necesario

•	RNF-3: El sistema deberá permitir el cambio de contraseña al usuario


6.	REQUISITOS FUNCIONALES:

•	RF-1: El sistema deberá ser capaz de hacer un listado en cada farmacia de los medicamentos que se encuentren disponibles.

•	RF-2: El sistema deberá permitir a los médicos acceder a la tarjeta sanitaria de los clientes y añadir o eliminar medicamentos en esta.

•	RF-3: El sistema deberá hacer un listado de las farmacias que se encuentren abiertas.

•	RF-5: El sistema deberá permitir registrarse a los pacientes, añadiendo un email y una contraseña.

•	RF-6: El sistema deberá permitir realizar filtros de búsqueda para permitir ver que medicamentos se encuentran en cada farmacia.



7.	REGLAS DE NEGOCIO:

•	RN-1: Si en un pedido se realiza la compra de dos packs de un producto, el segundo se cobrará únicamente el 50% del precio.

•	RN-2: El sueldo de los sanitarios debe ser mayor a 1800€

•	RN-3: Si al cliente con movilidad reducida no le llega el envío en el tiempo estipulado se le realizará un descuento del 25% del coste final en el siguiente pedido que realice.

•	RN-4: Si el cliente tiene un problema con la aplicación web y contacta con atención al cliente, este debe recibir respuesta de atención al cliente como máximo en 24 horas.
 
8.	MODELO CONCEPTUAL UML:

 
<img width="465" alt="image" src="https://github.com/CGIS-2023/proyecto-cgis-2023-andpercar1/assets/126070898/dc99cfda-2d38-4d33-aa14-8e0776650997">


