<a name="br1"></a> 

Ortega Salas Sandra, Martínez Infante Leslei Nevil

Ensayo de un Modelo Vista Controlador

Instituto Tecnológico de Tláhuac

Ingeniería en Sistemas Computacionales

Grupo: 8S2 Programación Web PHP con MVC

21-marzo, 2024
<hr>

</hr>

**1.1 INDICE.**

[**1.1**](#br1)[** ](#br1)[INDICE.**](#br1)[** ](#br1)[...........................................................................................................................................................................1](#br1)

[**1.2**](#br2)[** ](#br2)[RESUMEN**](#br2)[......................................................................................................................................................................2](#br2)

[**1.3**](#br2)[** ](#br2)[INTRODUCCIÓN**](#br2)[...........................................................................................................................................................2](#br2)

[**1.3.1**](#br2)[** ](#br2)[DEFINICIÓN**](#br2)[** ](#br2)[DE**](#br2)[** ](#br2)[MODELO.**](#br2)[.................................................................................................................................2](#br2)

[**1.3.2**](#br3)[** ](#br3)[DEFINICIÓN**](#br3)[** ](#br3)[DE**](#br3)[** ](#br3)[VISTA.**](#br3)[.......................................................................................................................................3](#br3)

[**1.3.3**](#br3)[** ](#br3)[DEFINICIÓN**](#br3)[** ](#br3)[DE**](#br3)[** ](#br3)[CONTROLADOR.**](#br3)[** ](#br3)[...................................................................................................................3](#br3)

[**1.3.4**](#br3)[** ](#br3)[DEFINICIÓN**](#br3)[** ](#br3)[DE**](#br3)[** ](#br3)[PHP.**](#br3)[** ](#br3)[..........................................................................................................................................3](#br3)

[**1.4**](#br3)[** ](#br3)[DESARROLLO**](#br3)[..............................................................................................................................................................3](#br3)

[**1.5**](#br11)[** ](#br11)[CONCLUSIONES**](#br11)[........................................................................................................................................................11](#br11)

[**1.6**](#br11)[** ](#br11)[REFERENCIAS**](#br11)[** ](#br11)[...........................................................................................................................................................11](#br11)

<hr>

</hr>

<a name="br2"></a> 

**1.2 RESUMEN**

Dentro del proyecto, observaremos su elaboración por medio del Modelo-Vista-Controlador, en donde

podemos visualizar como se va desarrollando, de tal manera que sea integrado dentro del mismo.

Tomando en cuenta el código hecho en PHP, así mismo utilizando código HTML y el apoyo en

diagramas, se va teniendo un margen del programa para que sea comprensible.

En el desarrollo se debe tener una secuencia en los códigos y tener una congruencia de cómo se irá

organizando en cada una de las carpetas que se van asignando conforme va funcionando cada parte

de la estructura.

Uno de los objetivos principales de este proyecto es conocer más sobre la estructura que se está

tomando como referencia, especificar de manera clara el contexto que se va realizando cada una de

las partes del código, generando así el Modelo-Vista-Controlador.

<hr>

</hr>

**1.3 INTRODUCCIÓN**

El propósito del proyecto es encontrar una manera diferente para la venta de cosméticos, donde

desarrollamos una aplicación web teniendo como base la estructura de Modelo-Vista-Controlador, esto

con la finalidad de tener un control sobre el código, que, si a recomendaciones futuras se requiere

realizar una modificación o insertar nuevas acciones, esto nos ayudará a realizarlo de manera

entendible.

La importancia de este documento, está vinculado con el desarrollo de la aplicación web

con la intención de darle formato en la estructura ya mencionada, siendo así que el presente escrito,

denominado “Supershop cosmetic”, te será de ayuda para la realización de código dentro de un

sistema Modelo-Vista-Controlador.

**1.3.1 DEFINICIÓN DE MODELO.**

El modelo es responsable de la lógica de datos de la aplicación, es independiente de la interfaz de

usuario. Gestiona directamente los datos, garantiza su integridad y accesibilidad, la lógica y las reglas

de aplicación. Si el estado de estos datos, el modelo generalmente debe notificar a la vista para que

así pueda ser cambiado.

<a name="br3"></a> 

**1.3.2 DEFINICIÓN DE VISTA.**

La vista define como se deberán mostrar los datos de la aplicación, donde se proporciona la interfaz

de usuario necesaria para interactuar con la aplicación. Dentro de esta, puede haber menús o botones,

no maneja la entrada de usuario. Se comunica con el controlador, donde recibirá los datos para mostrar

el modelo.

**1.3.3 DEFINICIÓN DE CONTROLADOR.**

El controlador contiene la lógica que actualiza el modelo y/o la vista en respuesta a las entradas de los

usuarios de la aplicación, facilita las comunicaciones entre la aplicación actuando como la interfaz

entre las capas, acepta entradas y las convierte en comandos para el modelo o vista.

**1.3.4 DEFINICIÓN DE PHP.**

Es un lenguaje de programación de código abierto, esto quiere decir que puede ser modificado por

desarrolladores y se apta a diversos proyectos, se utiliza sobre todo en el entorno de desarrollo web,

principalmente para el desarrollo de backend de una web, en el lado del servidor; sin embargo, tiene

numerosas utilidades en el frontend, está diseñado para incrustarse en HTML. Una de las

particularidades de PHP es que el código donde se integre se ejecutará del lado del servidor y sólo

después se enviará al cliente.

<hr>

</hr>

**1.4 DESARROLLO**

Dentro del proyecto, podemos apreciar como principal diagrama, cada una de las partes que se van

a presentar dentro de la estructura del programa:


![MVC](https://github.com/pandi2570/TiendaMaquillaje/assets/168136025/69d0db4a-5f3a-4ecd-82e0-41f881a9ef69)


<a name="br4"></a> 

**Vista:** es la parte de la estructura donde se muestra una interfaz que será para que el usuario pueda

interactuar con la plataforma.

En esta parte del proyecto realizamos una vista de manera que sea entendible para el usuario, donde

utilizamos botones, áreas de texto, validación de datos.

Como se muestra en el siguiente código, podemos visualizar como se realizó la interfaz de usuario

donde tenemos un **input** de tipo texto, otro **input** de tipo password, dentro de este mismo código,

observamos que se manda a llamar al controlador, y se utilizan diseños de CSS.

![vista](https://github.com/pandi2570/TiendaMaquillaje/assets/168136025/7c9a6f13-b77c-4744-bb2c-6d97783ad273)


Como se a mencionado utilizamos diseños CSS que funcionan como:

**.contenedor:** que en su totalidad es el contorno donde se encuentra el login para ingresar a la

aplicación web, teniendo una forma especial que se a integrado a este mismo.

**.contenedor form:** que es la forma en que será presentado el login, en este caso se da el tamaño en

pixeles.

**.contenedor form input:** el formato que llevará de igual manera el contenedor, en este caso se agrega

que sea Cursiva y de igual manera se le da el tamaño en pixeles.


![contenedor](https://github.com/pandi2570/TiendaMaquillaje/assets/168136025/e391a749-f618-45f9-8e0c-2df980b0b03e)



<a name="br5"></a> 

Después de generar la parte del código “**Login”** tenemos el siguiente diseño, que se puede visualizar

de manera simple y entendible.



<img width="405" alt="login" src="https://github.com/pandi2570/TiendaMaquillaje/assets/168136025/f24550a4-a91c-4553-8c81-6f345c737aee">


<a name="br6"></a> 

En el código siguiente podemos observar la realización del menú, donde tenemos la presentación de

la aplicación web y por quienes a sido elaborada, teniendo en cuenta también el titulo de la página que

ha sido denominado “supershop cosmetic”

![supershop](https://github.com/pandi2570/TiendaMaquillaje/assets/168136025/0c7955c4-b41f-4ebd-aea1-ec2cfe0c99de)

De está manera podemos encontrar nuestra vista de esta manera, agregando al código una serie de

menú para entrar a las demás vistas.

<img width="404" alt="vistass" src="https://github.com/pandi2570/TiendaMaquillaje/assets/168136025/5456f840-a458-4480-9b7c-7ae482caaaae">


<a name="br7"></a> 

**Modelo:** donde se va a almacenar la llamada a la base de datos, permitiendo que se encuentre de

igual manera los códigos relacionados a la base de datos.

Para realizar la base de datos, debemos realizar un diagrama de bases de datos, el cuál va guiando

al programador para realizar la base de datos.

En este caso podemos visualizar las tablas de **Usuario**, la cual será utilizada para el login, **Carrito**

está es utilizada para las compras que irá realizando el usuario. **Prendas,** en esta tabla se guardan

los datos de cada uno de los productos que serán visualizados por el usuario, las **Ventas** las cuales

también se van almacenando en nuestra base de datos, teniendo una segunda tabla, que recolecta el

**Detalle de venta** donde se mantiene que es lo que compró el usuario.

![modelo](https://github.com/pandi2570/TiendaMaquillaje/assets/168136025/31c21e31-1df1-4612-aee8-4875f40fbaf2)


Dentro del siguiente lapso de código podemos apreciar como se manda a llamar la base de datos,

donde se da la evaluación si el usuario y la contraseña son verdaderas y así mismo dejar ingresar al

usuario a la siguiente parte de la vista.

![parte vista](https://github.com/pandi2570/TiendaMaquillaje/assets/168136025/70896448-d2d3-41a5-a761-9cd2f25628fb)

Aquí podemos observar la creación de la base de datos, la cual también es perteneciente al modelo.

![sig](https://github.com/pandi2570/TiendaMaquillaje/assets/168136025/d5d36e7b-5472-41f8-a325-3b172d9b1d3a)

<a name="br8"></a> 

**Controlador:** prácticamente este realiza la comunicación entre la base de datos y la vista, para que

así el usuario pueda interactuar con la base de datos por medio de la vista que se le imparte.

En el controlador, como bien se ha mencionado tenemos que es la que interactúa entre la base de

datos y la vista que será mostrada al usuario. Se da a conocer las siguientes líneas de código, donde

se realiza la conexión de la base de datos.

**$host =** en esta parte de código, se agregará el host donde se encuentra la base de datos “**localhost”.**

**$user =** se ingresa el nombre del usuario de donde se extraerá en el caso de este código, es llamado

**“root”**

**$clave =** en la clave, como su nombre lo indica se ingresa la contraseña del usuario, a veces este es

denominado “$password” y en este caso podemos visualizar que se encuentran solas las comillas,

esto es porque no se tiene contraseña en el usuario **“”.**

**$bd =** aquí tendrá que agregar el nombre de la base de datos en este código se tiene como **“Leslei”.**

**$conexion =** lo que realiza esta línea de código es que con los datos ya proporcionados se extrae la base de datos.

![san](https://github.com/pandi2570/TiendaMaquillaje/assets/168136025/52a359ae-5ab1-4952-93ee-69e6147c8c92)

<a name="br9"></a> 

Se puede mostrar en el siguiente código, como se manda a llamar cada una de las partes de inserción

para los productos, y se comunica con modelProduct.php, con la línea de código:

*require\_once "../model/modelProduct.php";*

La cual después se llama a la Vista, y se esta manera sea visualizada, de la manera en que se pueda

visualizar cada uno de los productos. Con esta línea de código pueden llamarse las distintas clases de

cualquier carpeta, para que así nuestro Modelo-Vista-Controlador sea de manera más eficiente.

![eficiente](https://github.com/pandi2570/TiendaMaquillaje/assets/168136025/76514694-ad19-4965-96e3-487f71b3d589)

<a name="br10"></a> 

Aquí se puede mostrar como con esta línea de código se puede integrar en la siguiente vista la base

de datos para así poder agregar productos, ser eliminados e incluso agregar imágenes.

<img width="442" alt="guardar" src="https://github.com/pandi2570/TiendaMaquillaje/assets/168136025/1c81a9cb-694d-43e5-a803-d54f1693a8b4">


De esta manera, se va integrando nuestra carpeta CONTROLADOR, donde podemos encontrar login,

delete, exit, mail, productos.

![products](https://github.com/pandi2570/TiendaMaquillaje/assets/168136025/ec4ec588-2baa-4747-a16b-8446ea4ca65a)

![ima](https://github.com/pandi2570/TiendaMaquillaje/assets/168136025/73417b9b-9c57-42c2-b0a7-a063d42b6f6f)

<a name="br11"></a> 

<hr>

</hr>

**1.5 CONCLUSIONES**

En conclusión, el Modelo-Vista-Controlador es una estructura que se fundamenta en la elaboración de

proyectos, y en este, podemos encontrar una organización de nuestros códigos de manera que sea

entendible para futuras modificaciones, así como la generación de obtener una arquitectura más

limpia, siendo el código más escalable y fácil de entender.

Generalmente esta estructura nos ayuda a clasificar la información, la lógica del sistema y la interfaz

que se le es presentada al usuario, y dándole mayor capacidad al programador de poder modificar

alguno de los componentes que se encuentran dentro de los códigos sin la necesidad de afectar los

demás componentes.

<hr>

</hr>

**1.6 REFERENCIAS**

*MVC - MDN Web Docs Glossary: Definitions of Web-related terms | MDN*. (2023, 20 diciembre). MDN Web

Doc[s.](https://developer.mozilla.org/en-US/docs/Glossary/MVC)[ ](https://developer.mozilla.org/en-US/docs/Glossary/MVC)<https://developer.mozilla.org/en-US/docs/Glossary/MVC>

Wikipedia contributors. (2024b, marzo 16). *Model–View–Controller*. Wikipedia.

<https://en.wikipedia.org/wiki/Model%E2%80%93view%E2%80%93controller>

Sheldon, R. (2023, 12 septiembre). *model-view-controller (MVC)*. WhatIs.

<https://www.techtarget.com/whatis/definition/model-view-controller-MVC>

11

