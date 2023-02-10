@extends('admin.plantilla.plantilla')

@section ('titulo', 'Inventario Tablas')

@section('main')

    <div class="off-canvas-content" data-off-canvas-content>
        @section('inventarioCategoria','Inventario de Tablas')


        <article class="grid-container">
            <div class="grid-x grid-margin-x small-up-2 medium-up-3 large-up-4">
                <div class="cell">
                    <img class="thumbnail" src="https://placehold.it/550x550">
                    <h5>My Site</h5>
                </div>
                <div class="cell">
                    <img class="thumbnail" src="https://placehold.it/550x550">
                    <h5>My Site</h5>
                </div>
                <div class="cell">
                    <img class="thumbnail" src="https://placehold.it/550x550">
                    <h5>My Site</h5>
                </div>
                <div class="cell">
                    <img class="thumbnail" src="https://placehold.it/550x550">
                    <h5>My Site</h5>
                </div>
                <div class="cell">
                    <img class="thumbnail" src="https://placehold.it/550x550">
                    <h5>My Site</h5>
                </div>
                <div class="cell">
                    <img class="thumbnail" src="https://placehold.it/550x550">
                    <h5>My Site</h5>
                </div>
                <div class="cell">
                    <img class="thumbnail" src="https://placehold.it/550x550">
                    <h5>My Site</h5>
                </div>
                <div class="cell">
                    <img class="thumbnail" src="https://placehold.it/550x550">
                    <h5>My Site</h5>
                </div>
                <div class="cell">
                    <img class="thumbnail" src="https://placehold.it/550x550">
                    <h5>My Site</h5>
                </div>
                <div class="cell">
                    <img class="thumbnail" src="https://placehold.it/550x550">
                    <h5>My Site</h5>
                </div>
                <div class="cell">
                    <img class="thumbnail" src="https://placehold.it/550x550">
                    <h5>My Site</h5>
                </div>
                <div class="cell">
                    <img class="thumbnail" src="https://placehold.it/550x550">
                    <h5>My Site</h5>
                </div>
            </div>

            <hr>

            <div class="grid-x grid-margin-x">
                <div class="medium-6 cell">
                    <h3>Contact Me</h3>
                    <p>Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend
                        nibh porttitor. Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl
                        tempor. Suspendisse dictum feugiat nisl ut dapibus. Mauris iaculis porttitor.</p>
                    <ul class="menu">
                        <li><a href="#">Dribbble</a></li>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Yo</a></li>
                    </ul>
                </div>
                <div class="medium-6 cell">
                    <label>Name
                        <input type="text" placeholder="Name">
                    </label>
                    <label>Email
                        <input type="text" placeholder="Email">
                    </label>
                    <label>
                        Message
                        <textarea placeholder="holla at a designer"></textarea>
                    </label>
                    <input type="submit" class="button expanded" value="Submit">
                </div>
            </div>
        </article>
    </div>

    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/js/foundation.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/motion-ui/1.2.3/motion-ui.min.js"></script>
    <script>
        $(document).foundation();
    </script>
    
@endsection