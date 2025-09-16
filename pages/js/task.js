document.getElementById('deleteForm').addEventListener('submit', function(e) {
    const checked = document.querySelectorAll('input[name="tasks[]"]:checked');
    if (checked.length === 0) {
        alert('Selecione pelo menos uma tarefa para apagar.');
        e.preventDefault();
    } else if (!confirm('Tem certeza que deseja apagar as tarefas selecionadas?')) {
        e.preventDefault();
    }
});