# Proyecto Bolsa Laboral

Este proyecto es una aplicación web de gestión de usuarios para una Bolsa de Trabajo, donde se pueden agregar, editar y eliminar usuarios, así como realizar consultas y filtros sobre los datos registrados.

## Características

- **Gestión de Usuarios**: Crear, editar y eliminar usuarios.
- **Roles de Usuarios**: Asignar roles a los usuarios (Administrador, Egresado, Empresa, Docente).
- **Seguridad**: Evitar inyecciones SQL mediante el uso de `mysqli_real_escape_string`.
- **Interfaz de Usuario**: Usando Bootstrap para un diseño atractivo y funcional.

## Requisitos Previos

Para ejecutar este proyecto en tu máquina local, necesitarás tener instalados los siguientes programas:

- [XAMPP](https://www.apachefriends.org/index.html) o cualquier otro servidor local con soporte para PHP y MySQL.
- Un navegador web moderno.

## Instalación

1. **Clonar el repositorio**:

   ```bash
   git clone https://github.com/german654/SmartJobs-Bolsa-Laboral.git
   ```
2. **Configurar la base de datos** :

* Crear la base de datos bolsa_laborall en MySQL.
* Importar el archivo SQL  (bolsa_laboral.sql) para crear las tablas necesarias.

2. **Configuración del proyecto** :

* Navegar a la carpeta `config` y editar el archivo `config.php` con las credenciales de tu base de datos:

<pre><div class="dark bg-gray-950 contain-inline-size rounded-md border-[0.5px] border-token-border-medium"><div class="flex items-center relative text-token-text-secondary bg-token-main-surface-secondary px-4 py-2 text-xs font-sans justify-between rounded-t-md"><span>php</span><div class="flex items-center"><span class="" data-state="closed"><button class="flex gap-1 items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-sm"><path fill-rule="evenodd" clip-rule="evenodd" d="M7 5C7 3.34315 8.34315 2 10 2H19C20.6569 2 22 3.34315 22 5V14C22 15.6569 20.6569 17 19 17H17V19C17 20.6569 15.6569 22 14 22H5C3.34315 22 2 20.6569 2 19V10C2 8.34315 3.34315 7 5 7H7V5ZM9 7H14C15.6569 7 17 8.34315 17 10V15H19C19.5523 15 20 14.5523 20 14V5C20 4.44772 19.5523 4 19 4H10C9.44772 4 9 4.44772 9 5V7ZM5 9C4.44772 9 4 9.44772 4 10V19C4 19.5523 4.44772 20 5 20H14C14.5523 20 15 19.5523 15 19V10C15 9.44772 14.5523 9 14 9H5Z" fill="currentColor"></path></svg>Copiar código</button></span></div></div><div class="overflow-y-auto p-4" dir="ltr"><code class="!whitespace-pre hljs language-php"><?php
   define('SERVIDOR', 'localhost');
   define('USUARIO', 'tu_usuario');
   define('PASSWORD', 'tu_contraseña');
   define('BASE_DE_DATOS', 'nombre_base_de_datos');
   ?>
   </code></div></div></pre>

2. **Mover los archivos a la carpeta del servidor** :

* Colocar los archivos del proyecto en el directorio raíz de tu servidor web, por ejemplo, `C:/xampp/htdocs/bolsa-laboral/`.

2. **Iniciar el servidor** :

* Iniciar Apache y MySQL desde el panel de control de XAMPP.

2. **Acceder a la aplicación** :

* Abre tu navegador y accede a `http://localhost:8012/sisc_bolsa/source/usuarios/index.php`

## Estructura del Proyecto

El proyecto sigue la siguiente estructura de carpetas:

<pre><div class="dark bg-gray-950 contain-inline-size rounded-md border-[0.5px] border-token-border-medium"><div class="flex items-center relative text-token-text-secondary bg-token-main-surface-secondary px-4 py-2 text-xs font-sans justify-between rounded-t-md"><span>bash</span><div class="flex items-center"><span class="" data-state="closed"><button class="flex gap-1 items-center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-sm"><path fill-rule="evenodd" clip-rule="evenodd" d="M7 5C7 3.34315 8.34315 2 10 2H19C20.6569 2 22 3.34315 22 5V14C22 15.6569 20.6569 17 19 17H17V19C17 20.6569 15.6569 22 14 22H5C3.34315 22 2 20.6569 2 19V10C2 8.34315 3.34315 7 5 7H7V5ZM9 7H14C15.6569 7 17 8.34315 17 10V15H19C19.5523 15 20 14.5523 20 14V5C20 4.44772 19.5523 4 19 4H10C9.44772 4 9 4.44772 9 5V7ZM5 9C4.44772 9 4 9.44772 4 10V19C4 19.5523 4.44772 20 5 20H14C14.5523 20 15 19.5523 15 19V10C15 9.44772 14.5523 9 14 9H5Z" fill="currentColor"></path></svg>Copiar código</button></span></div></div><div class="overflow-y-auto p-4" dir="ltr"><code class="!whitespace-pre hljs language-bash">bolsa-laboral/
│
├── config/
│   └── config.php    # Configuración de la base de datos
│
├── source/
│   ├── usuarios/
│   │   ├── user_form.php     # Formulario para agregar usuarios
│   │   ├── user_edit.php     # Formulario para editar usuarios
│   │   ├── user_delete.php   # Script para eliminar usuarios
│   │   ├── usuarios.php      # Página principal que lista los usuarios
│
├── css/
│   └── bootstrap/            # Archivos de Bootstrap
│
└── README.md                 # Este archivo
</code></div></div></pre>

## Uso

### Agregar un Usuario

1. Desde la página principal `usuarios.php`, haz clic en el botón "Agregar usuario".
2. Completa el formulario con los datos del usuario y selecciona el rol correspondiente.
3. Haz clic en "Guardar" para agregar el nuevo usuario.

### Editar un Usuario

1. En la lista de usuarios, haz clic en el botón "Editar" al lado del usuario que deseas modificar.
2. Realiza los cambios necesarios en el formulario.
3. Haz clic en "Actualizar" para guardar los cambios.

### Eliminar un Usuario

1. En la lista de usuarios, haz clic en el botón "Eliminar" al lado del usuario que deseas eliminar.
2. Confirma la eliminación cuando se te solicite.

## Contribuciones

Si deseas contribuir al proyecto, por favor sigue los siguientes pasos:

1. Haz un fork del repositorio.
2. Crea una nueva rama (`git checkout -b feature/nueva-funcionalidad`).
3. Realiza los cambios y haz commit (`git commit -am 'Agrega nueva funcionalidad'`).
4. Haz push a la rama (`git push origin feature/nueva-funcionalidad`).
5. Crea un nuevo Pull Request.

## Licencia

Este proyecto está bajo la Licencia MIT. Para más detalles, consulta el archivo LICENSE.
