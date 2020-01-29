class EmployeesApiService {

    getList(page) {
        const url = this.getUrlCompanyList(page)
        return axios.get(url)
            .then(({data}) => data)
    }
    getUrlCompanyList(page) {
        return `/api/getEmployeesList.php?page=${page}`
    }

    getEmployee(employeeId) {
        const url = this.getUrlGetEmployee(employeeId)
        return axios.get(url)
            .then(({data}) => data)
    }
    getUrlGetEmployee(employeeId) {
        return `/api/getEmployee.php?employeeId=${employeeId}`
    }
}