<?php


namespace AppServices\Employees;

use Domain\Employees\EmployeesRepository;
use Domain\ValueObjects\Pagination;


final class GetEmployeesList
{
    private $employeesRepository;
    private $page;

    public function __construct(EmployeesRepository $employeesRepository, int $limit, int $offset)
    {
        $this->employeesRepository = $employeesRepository;
        $this->page = new Pagination($limit, $offset);
    }

    public function __invoke(): array
    {
        return $this->employeesRepository->getEmployeesList($this->page);
    }


}