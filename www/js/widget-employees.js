const service = new EmployeesApiService('eb96c47e-a446-4322-b1bc-89946cb9100d');
const DEFAULT_PAGE = 1;
new Vue({
    el: '#appEmployeesList',
    data: {
        employees: [],
        form_data: [],
        employee: [],
        pageActive: 1
    },

    created: function () {
        service.getList(DEFAULT_PAGE)
            .then(this.setData);
        },
    methods: {
        setData: function({ data }) {
            this.employees = data;
        },

        loadEmployeeData: function (employeeId) {
            service.getEmployee(employeeId)
                .then(this.setEmployeeData)
        },

        setEmployeeData: function({ data }) {
            this.form_data = data;
            },

        deleteEmployeeData: function (employeeId) {
            service.getEmployee(employeeId)
                .then(this.setDeleteEmployeeData)
        },

        setDeleteEmployeeData: function({ data }) {
            this.employee = data;
        },
    }
});
