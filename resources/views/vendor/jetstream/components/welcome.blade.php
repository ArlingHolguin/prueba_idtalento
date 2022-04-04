<div class="p-6 sm:px-20 bg-white border-b border-gray-200">
    <div>
        <p><strong>ID</strong>Talento</p>
    </div>

    <div class="mt-8 text-2xl">
        Prueba Técnica Desarrollador Laravel
    </div>

    <div class="mt-6 text-gray-500">
        Cree una aplicación en Laravel (Preferiblemente en la versión 8) que cuente con un sistema de Login seguro y seeder que registre un usuario administrador por defecto. Luego cree un formulario que requiera de autenticación donde se pueda almacenar los datos básicos de una persona:
        <ul>
            <li><i class="fa-solid fa-angle-right"></i> Primer nombre</li>
            <li><i class="fa-solid fa-angle-right"></i> Segundo nombre</li>
            <li><i class="fa-solid fa-angle-right"></i> Primer apellido</li>
            <li><i class="fa-solid fa-angle-right"></i> Segundo apellido</li>
            <li><i class="fa-solid fa-angle-right"></i> Tipo de documento
                <ul class="ml-4 text-sm">
                    <li><i class="fa-solid fa-caret-right"></i> Cedula de ciudadanía</li>
                    <li><i class="fa-solid fa-caret-right"></i> Cedula de extranjería</li>
                    <li><i class="fa-solid fa-caret-right"></i> Tarjeta de identidad</li>
                    <li><i class="fa-solid fa-caret-right"></i> Pasaporte</li>
                  </ul>
            </li>
            <li><i class="fa-solid fa-angle-right"></i> Numero de documento</li>
            <li><i class="fa-solid fa-angle-right"></i> Correo</li>
            <li><i class="fa-solid fa-angle-right"></i> Contrseña</li>
        </ul>
        <p>Este formulario debe almacenar los datos de la persona en la base de datos y adicional crear un usuario que se pueda autenticar por medio del Login. El correo debe ser un dato único ya que será el utilizado para autenticarse y el tipo de documento y numero de documento también tienen que ser únicos en conjunto, es decir puede existir una persona registrada con un cedula de ciudadanía 123 y otra con cedula de extranjería 123.</p>
        <p>Finalmente debe crear una pagina donde se pueda listar las personas registradas y crear por medio de seeders o la herramienta con la que se sienta más cómodo(a) 1000 registros de personas.</p>
    </div>
</div>


