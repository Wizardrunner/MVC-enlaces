<?php include 'header.php'; ?>

<div class="container mt-5">
    <h1 class="text-center">Buscar en Enlaces</h1>
    <form id="searchForm" action="?controller=Preguntas&action=buscar" method="POST" class="mt-4">
        <div class="form-group">
            <label for="query">Consulta</label>
            <input 
                type="text" 
                name="query" 
                id="query" 
                class="form-control" 
                placeholder="Ingresa tu búsqueda" 
                required>
        </div>
        <div class="form-group mt-3">
            <label for="filter">Filtrar por</label>
            <div class="form-check">
                <input 
                    type="radio" 
                    name="filter" 
                    id="categoria" 
                    value="categoria" 
                    class="form-check-input"
                    required>
                <label class="form-check-label" for="categoria">Categoría</label>
            </div>
            <div class="form-check">
                <input 
                    type="radio" 
                    name="filter" 
                    id="lenguaje" 
                    value="lenguaje" 
                    class="form-check-input"
                    required>
                <label class="form-check-label" for="lenguaje">Lenguaje de Programación</label>
            </div>
            <div class="form-check">
                <input 
                    type="radio" 
                    name="filter" 
                    id="titulo" 
                    value="titulo" 
                    class="form-check-input"
                    required>
                <label class="form-check-label" for="titulo">Título</label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Buscar</button>
    </form>
</div>

<?php include 'footer.php'; ?>
