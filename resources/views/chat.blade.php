@extends('layouts.main')

@push('page_title')
    Chat
@endpush

@push('breadcrumb')
    <li class="breadcrumb-item active">Chat</li>
@endpush

@section('content')
    <div class="container">
        <form method="POST" action="{{ route('chat.response') }}">
            @csrf

            <div class="mb-3">
                <label for="model" class="form-label">Modelo</label>
                <select class="form-select" id="model" name="model" onchange="updateModelDescription()">
                    <option selected value="davinci">Davinci</option>
                    <option value="text-curie-002">Curie</option>
                    <option value="text-babbage-002">Babbage</option>
                    <option value="gpt-3.5-turbo">GPT 3.5 Turbo</option>
                    <option value="gpt-4">GPT 4</option>
                </select>
                <p id="model-description"></p>
            </div>

            <div class="mb-3">
                <label for="role" class="form-label">Role</label>
                <select class="form-select" id="role" name="role">
                    <option selected value="system">Sistema</option>
                    <option value="user">Usuario</option>
                    <option value="assistant">Asistente</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="temperature" class="form-label">Temperature</label>
                <input type="number" step="0.1" min="0" max="1" class="form-control" id="temperature" name="temperature" value="0.5">
            </div>

            <div class="mb-3">
                <label for="maxTokens" class="form-label">Max Tokens</label>
                <input type="number" class="form-control" id="maxTokens" name="maxTokens" value="60">
            </div>

            <div class="mb-3">
                <label for="messages" class="form-label">Instructions</label>
                <textarea class="form-control" id="messages" name="messages" rows="5" placeholder='[{"role": "system", "content": "You are a helpful assistant."}, {"role": "user", "content": "Who won the world series in 2020?"}]'></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection

@push('scripts')
    <script>
        var descriptions = {
            "text-davinci-003": "El modelo más capaz. Buena opción para tareas de lenguaje natural complejas.",
            "text-curie-002": "Un modelo más pequeño pero todavía potente, bueno para la mayoría de las tareas de lenguaje natural.",
            "text-babbage-002": "Modelo de menor capacidad, útil para tareas menos exigentes.",
            "gpt-3.5-turbo": "El modelo GPT-3.5 más capaz y optimizado para chat a una décima parte del costo del modelo text-davinci-003. Será actualizado con nuestra última iteración de modelo.",
            "gpt-4": "Más capaz que cualquier modelo GPT-3.5, capaz de realizar tareas más complejas y optimizado para chat. Será actualizado con nuestra última iteración de modelo."
        };

        function updateModelDescription() {
            var model = document.getElementById('model').value;
            document.getElementById('model-description').innerText = descriptions[model];
        }

        // Update the description when the page loads
        window.onload = updateModelDescription;
    </script>
@endpush
