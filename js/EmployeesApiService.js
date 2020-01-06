class EmployeesApiService {
    constructor(company) {
        this.companyId = company;
    }
    getList(page) {
        const url = this.getUrlCompanyList(page)
        return axios.get(url)
            .then(({data}) => data)
    }
    getUrlCompanyList(page) {
        return `/vuejsexample/Api/getEmployeesList.php?company=${this.companyId}&page=${page}`
    }

    getEmployee(employeeId) {
        const url = this.getUrlGetEmployee(employeeId)
        return axios.get(url)
            .then(({data}) => data)
    }
    getUrlGetEmployee(employeeId) {
        return `/vuejsexample/Api/getEmployee.php?company=${this.companyId}&employeeId=${employeeId}`
    }
}