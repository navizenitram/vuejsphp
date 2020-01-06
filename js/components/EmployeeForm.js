const templateEmployeeForm = `
    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">{{form_title}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>

                            <div class="form-group">
                                <label for="inputName">Nombre</label>
                                <input type="text" class="form-control" name="inputName" v-model="form_data.name">
                            </div>
                            <div class="form-group">
                                <label for="inputSurname">Apellidos</label>
                                <input type="text" class="form-control" name="inputSurname" v-model="form_data.surname">
                            </div>

                            <div class="form-group">
                                <label for="inputEmail">Email</label>
                                <input type="email" class="form-control" name="inputEmail" v-model="form_data.email">
                            </div>

                            <div class="form-group">
                                <label for="inputPosition">Cargo</label>
                                <select class="custom-select" name="inputPosition" v-model="form_data.position">
                                    <option selected>Elige una opción...</option>
                                    <option value="Fullstack developer">Fullstack developer</option>
                                    <option value="Backend developer">Backend developer</option>
                                    <option value="Junior Developer">Junior Developer</option>
                                    <option value="Manager">Manager</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="inputOffice">Oficina</label>
                                <select class="custom-select" name="inputOffice" v-model="form_data.office">
                                    <option selected>Elige una opción...</option>
                                    <option value="Barcelona">Barcelona</option>
                                    <option value="Madrid">Madrid</option>
                                    <option value="París">París</option>
                                </select>
                            </div>


                            <div class="form-group">
                                <label for="inputSalary">Salario</label>
                                <input type="number" step="0.01" class="form-control" name="inputSalary" aria-describedby="salaryHelp" v-model="form_data.salary">
                                <small id="salaryHelp" class="form-text text-muted">Salario bruto anual en Euros</small>
                            </div>

                            <div class="form-group">
                                <label for="inputWorkingHours">Horas semanales</label>
                                <input type="number" step="0.01" class="form-control" name="inputWorkingHours" v-model="form_data.workingHours">
                            </div>

                            <div class="form-group">
                                <div>
                                    <label for="inputPhoto">Foto del empleado</label>
                                    <img v-if="form_data.length != 0" class="avatar-employee mx-auto rounded-circle img-fluid" :src="form_data.avatar">
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input">
                                    <label class="custom-file-label" for="inputPhoto">Añade una foto de perfil</label>
                                </div>
                            </div>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-primary">Guardar</button>
                    </div>
         </div>
`

Vue.component('employee-form', {
    props:['form_data', 'form_title'],
    template: templateEmployeeForm
})