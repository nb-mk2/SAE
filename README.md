# Documentación del Proyecto SAE

¡Hola! Este es un resumen del proyecto SAE, se desarrollado para la **Facultad de La Pampa**. A continuación, voy a explicar  un poco sobre el proyecto y los archivos más importantes.

## Descripción General

Este proyecto es una aplicación web diseñada para gestionar las actividades extracurriculares de la institución. A través de este sistema, es posible manejar datos dinámicos con PHP, visualizar gráficos interactivos con JavaScript y 
ofrecer una interfaz atractiva y funcional utilizando CSS/SCSS. Además, se han migrado varias páginas de HTML estático a PHP para una mayor flexibilidad.

### Tecnologías utilizadas:

- **HTML5** y **CSS3** para la estructura y el diseño.
- **PHP** para la generación dinámica de contenido.
- **JavaScript** y **jQuery** para interacciones y gráficos.
- **SCSS** para organizar y gestionar los estilos.
- **Bootstrap** para los estilos y la maquetación responsiva. Se utilizó para asegurar que el diseño se adapte a dispositivos móviles y otros tamaños de pantalla de manera eficiente.

## Archivos Principales

Aquí dejo una breve descripción de los archivos clave dentro del proyecto:

### 📝 **CSS/SCSS**

El archivo principal de estilo define los colores, tamaños y otras reglas para la visualización del sitio. Un color clave utilizado es `#AAA`, el cual se aplica a diversos elementos para mantener una estética coherente.

- **SCSS**: Estructura modular para facilitar la personalización y el mantenimiento del código CSS.

### ⚙️ **JavaScript**

Para darle vida al proyecto, se usan bibliotecas como **Chart.js**, **Chartist** y **Flot** para la visualización de gráficos. Además, utilizo **SweetAlert** y **Toastr** para notificaciones y alertas interactivas.

- **Archivos clave**: 
  - `chart-*` (por ejemplo, `chart-chartist.php`, `chart-chartjs.php`): Archivos de gráficos.
  - `email-*` (por ejemplo, `email-compose.php`, `email-inbox.php`): Gestión de correos electrónicos.

### 🔧 **PHP**

Al migrar las páginas a PHP, ahora se puede interactuar dinámicamente con la base de datos y generar contenido según las necesidades que necesite el usuario.

- **Archivos clave**:
  - `Res57421PresentacindeactividadesAcadmicasExtracurriculares.php`: Migración de una página de actividades académicas.
  - `index.php.php`: Página para mostrar el panel administrador para el usuario principal.
  - - `form-*` (por ejemplo, `form-nuevo-sae.php`, `form-tabla-sae.php`): Formularios para la carga de la actividad extracurricular.
  - - `form-*` (por ejemplo, `form-tabla-sae.php`, `form-tabla-sae.php`): Tabla para poder ver las activiades cargadas, esto va ir variando dependiendo el rol del Usuario.

### 🔒 **.htaccess**

Se realizaron ajustes en el archivo `.htaccess` para mejorar el rendimiento, la seguridad y la reescritura de URLs. Esto asegura que la estructura del sitio sea más robusta.

### 📂 **Otros Archivos Importantes**

- **index.php**: Página principal de la aplicación.
- **sidebar.php**: Barra lateral de navegación.
- **header.php** y **footer.php**: Encabezado y pie de página del sitio.


## Conclusión

Este proyecto ha sido una excelente oportunidad para integrar diferentes tecnologías y conceptos adquiridos durante mi carrera. Me ha permitido mejorar mis habilidades en el desarrollo web, desde el diseño de la interfaz hasta la implementación de funcionalidad dinámica.

## Cómo ejecutar el proyecto

Si quieren probar este proyecto, puedes clonar el repositorio y seguir estos pasos:

1. Clona el repositorio:
   ```bash
   git clone https://github.com/tuusuario/tu-repositorio.git
