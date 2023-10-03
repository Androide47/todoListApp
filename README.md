# Lista de Tareas con React y Backend en PHP

## Descripción del Proyecto

Esta es una aplicación sencilla de lista de tareas construida utilizando React.js para el frontend y PHP para el backend. La aplicación permite añadir, eliminar y editar tareas. El proyecto también cuenta con funcionalidades para alternar entre los botones "Editar" y "Guardar" durante la edición de tareas y muestra números de tarea para mayor claridad.

## Características

1. Añadir nuevas tareas
2. Eliminar tareas existentes
3. Editar tareas en línea
4. Alternar entre el botón "Editar" y "Guardar" durante la edición
5. Mostrar números de tarea

## Pila Tecnológica

- React.js
- PHP
- Axios para llamadas API
- Bootstrap para el estilo

### ¿Por qué Bootstrap?

Bootstrap se utiliza para un estilo rápido y receptivo. Permite un diseño limpio, moderno y receptivo, agilizando el proceso de desarrollo sin comprometer la experiencia del usuario.

## Configuración del Proyecto

### Requisitos Previos

1. Node.js y npm
2. PHP
3. XAMPP u otra configuración de servidor local que soporte PHP

### Pasos para el Despliegue

1. **Clonar el Repositorio**
    ```bash
    git clone https://github.com/Androide47/todoListApp.git
    ```

2. **Navegar al Directorio del Proyecto e Instalar Dependencias**
    ```bash
    cd react-php-todo
    npm install
    ```

3. **Iniciar el Servidor de Desarrollo de React**
    ```bash
    npm start
    ```

### Conexión a la Base de Datos usando XAMPP

1. Abra su panel de control de XAMPP y inicie los servicios de Apache y MySQL.
2. Abra su navegador y navegue a `http://localhost/phpmyadmin/` para crear una nueva base de datos para las tareas.
3. En sus archivos backend de PHP, actualice las configuraciones de la base de datos para que coincidan con su configuración.

---

## Actualizaciones Recientes

- **Funcionalidad Añadida**: Ahora las tareas están numeradas para una mejor identificación y gestión.
- **Funcionalidad Mejorada**: Los usuarios pueden ahora alternar entre "Editar" y "Guardar" durante la edición de tareas.

## Contribuciones

Siéntase libre de bifurcar el proyecto y enviar solicitudes de pull para cualquier característica o corrección que añada.

---

Este README incluye instrucciones de configuración del proyecto, descripciones de las características, pila tecnológica y una nota especial justificando el uso de Bootstrap. Siéntase libre de ampliarlo o modificarlo según las necesidades específicas de su proyecto.