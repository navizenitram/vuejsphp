const templateDeleteForm = `
     <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteEmployee">Eliminar empleado</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>¿Seguro que quieres eliminar este usuario?</p>
                        <div>
                            <img class="avatar-employee mx-auto rounded-circle img-fluid" :src="employee.avatar">
                            <p>{{employee.name}} {{employee.surname}}</p>
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-primary">Eliminar</button>
                    </div>
                </div>
`

Vue.component('delete-form', {
    props:['employee'],
    template: templateDeleteForm
})