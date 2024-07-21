<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $corePages = [
            'company',
            'permissions',
            'roles',
            'users',
            'currencies',
            'financial_years',
            'banks',
            'cards',
            'nationalities',
            'company_documents',
            'log_exports',
            'branches',
            'commission_policies'

        ];

        $accountingPages = [
            'accounting_setting',
            'account',
            'account_secret_entry',
            'account_groups',
            'cost_centers',
            'cost_center_groups',
            'projects',
            'project_groups',
            'receipt_vouchers',
            'payment_vouchers',
            'journal_entries',
            'journal_entry_templates',
            'postings',
            'accounting_receipts',
            'accounting_reports',
            'accounting_dashboard',
            'close_financial_years' => [
                'actions' => ['write'],
            ],
            'accounting_change_financial_years' => [
                'actions' => ['read'],
            ],
        ];

        $warehousePages = [
            'invoice_models',
            'purchase_daily_movements',
            'sales_daily_movements',
            'product_categories',
            'salesmen',
            'products',
            'warehouses',
            'units',
            'taxes',
            'vendors',
            'vendor_groups',
            'clients',
            'client_groups',
            'warehouse_setting',
            'purchase_invoice_financial_transactions',
            'sales_invoice_financial_transactions',
            'add_notices',
            'dismissal_notices',
            'return_add_notices',
            'return_dismissal_notices',
            'transfer_notices',
            'stocktaking',
            'invoicing_warehouse_postings',
            'warehouse_reports',
            'warehouse_dashboard',
            'warehouse_change_financial_years' => [
                'actions' => ['read'],
            ],


        ];

        $invoicingPages = [
            'invoice_models',
            'sales_daily_movements',
            'product_categories',
            'products',
            'units',
            'taxes',
            'clients',
            'client_groups',
            'salesmen',
            'invoice_setting',
            'sales_invoice_financial_transactions',
            'invoicing_warehouse_postings',
            'invoicing_reports',
            'invoicing_dashboard',
            'invoicing_change_financial_years' => [
                'actions' => ['read'],
            ],


        ];

        $hrPages = [
            'hr_setting',
            'hr_countries',
            'hr_languages',
            'hr_religions',
            'hr_marital_statuses',
            'hr_educational_qualifications',
            'hr_educational_institutions',
            'hr_appreciations',
            'hr_specialties',
            'hr_documents',
            'hr_departments',
            'hr_work_locations',
            'hr_job_types',
            'hr_jobs',
            'hr_job_classifications',
            'hr_work_systems',
            'hr_sanctions',
            'hr_sanction_reasons',
            'hr_custodies',
            'hr_employers',
            'hr_evaluation_items',
            'hr_tellers',
            'hr_trainings',
            'hr_trainers',
            'hr_employees',
            'hr_employment_requests',
            'hr_transfer_movements',
            'hr_sanction_movements',
            'hr_vacation_movements',
            'hr_update_contract_movements',
            'hr_document_movements',
            'hr_employee_rate_movements',
            'hr_training_movements',
            'hr_employee_number_movements',
            'hr_end_of_services',
            'hr_leave_settlements',
            'hr_wage_items',
            'hr_spend_types',
            'hr_wage_item_descriptions',
            'hr_entitlement_deduction_movements',
            'hr_installment_movements',
            'hr_calculate_salaries',
            'hr_create_new_month',
            'hr_migrate_salaries',
            'hr_migrate_salary_effects',
            'hr_recruitment_requests',
            'hr_migrate_to_accounting',
            'hr_reports',
            'hr_dashboard',
            'hr_salaries_reports',
            'hr_salaries_dashboard',
            'hr_muqeem_final_exit_operations' => [
                'actions' => ['read', 'write'],
            ],
            'hr_muqeem_exit_reenter_operations' => [
                'actions' => ['read', 'write'],
            ],
            'hr_muqeem_iqama_operations' => [
                'actions' => ['read', 'write'],
            ],
            'hr_muqeem_passport_operations' => [
                'actions' => ['read', 'write'],
            ],
            'hr_muqeem_occupation_operations' => [
                'actions' => ['read', 'write'],
            ],
        ];

        $salariesPages = [
            'hr_setting',
            'hr_wage_items',
            'hr_spend_types',
            'hr_wage_item_descriptions',
            'hr_entitlement_deduction_movements',
            'hr_installment_movements',
            'hr_calculate_salaries',
            'hr_create_new_month',
            'hr_migrate_salaries',
            'hr_migrate_salary_effects',
            'hr_recruitment_requests',
            'hr_migrate_to_accounting',
            'hr_salaries_reports',
            'hr_salaries_dashboard',
        ];

        $attendancePages = [
            'hr_employees',
            'hr_job_classifications',
            'hr_setting',
            'hr_countries',
            'hr_marital_statuses',
            'hr_departments',
            'hr_work_locations',
            'hr_job_types',
            'hr_jobs',
            'hr_work_systems',
            'hr_employee_number_movements',
            'hr_create_new_month',
            'hr_work_times',
            'hr_work_time_schedules',
            'hr_admin_employee_attendances',
            'hr_leave_requests',
            'attendance_reports',
            'hr_attendance_dashboard',
            'hr_delay_requests',
            'hr_work_time_temporary_changes',
        ];

        $customsPages = [
            'units',
            'taxes',
            'clients',
            'client_groups',
            'customs_setting',
            'customs_invoice_models',
            'customs_daily_movements',
            'customs_financial_transactions',
            'customs_transactions',
            'customs_containers',
            'customs_agents',
            'customs_documents',
            'customs_brokers',
            'customs_services',
            'customs_invoice_items',
            'customs_expense_revenues',
            'customs_deals',
            'customs_payment_vouchers',
            'customs_receipt_vouchers',
            'customs_invoices',
            'customs_invoice_financial_transactions',
            'customs_postings',
            'customs_reports',
            'customs_dashboard',
            'customs_change_financial_years' => [
                'actions' => ['read'],
            ],
        ];

        $transportPages = [
            'transport_setting',
            'units',
            'taxes',
            'clients',
            'client_groups',
            'salesmen',
            'vendors',
            'vendor_groups',
            'transport_cars',
            'transport_car_expenses',
            'transport_directions',
            'transport_drivers',
            'transport_trailers',
            'transport_trucks',
            'transport_invoice_models',
            'transport_products',
            'transport_reports',
            'transport_dashboard',
            'transport_postings',

            'transport_sales_invoices',
            'transport_sales_invoice_financial_transactions',
            'transport_purchase_invoices',
            'transport_purchase_invoice_financial_transactions',
            'transport_transport_movements',
            'transport_return_movements',
            'transport_download_movements',
            'transport_movement_expenses',
            'transport_change_financial_years' => [
                'actions' => ['read'],
            ],
        ];

        $restaurantPages = [
            'restaurant_setting',
            'units',
            'taxes',
            'clients',
            'client_groups',
            'vendors',
            'vendor_groups',
            'branches',

            'restaurant_meal_categories',
            'restaurant_meals',
            'restaurant_meal_periods',
            'restaurant_meal_modifiers',
            'restaurant_meal_modifier_options',
            'restaurant_branch_sections',
        ];

        $eApprovalPages = [
            'e_approval_setting',
            'e_approval_movements',
        ];

        $assetPages = [
            'asset_setting',
            'assets',
            'asset_categories',
            'asset_deprecations',
            'asset_deprecation_methods',
            'asset_acquisition_methods',
            'asset_locations',
            'asset_acquire_movements',
            'asset_deprecation_movements',
            'asset_transfers',
            'asset_maintenances',
            'asset_addition_movements',
            'asset_disposes',
            'asset_reports',
            'asset_maintenance_plans',
            'asset_re_evaluations',
            'asset_dashboard',
            'asset_attachments',
            'asset_postings',
            'asset_openings',
            'asset_change_financial_years' => [
                'actions' => ['read'],
            ],
        ];


        $posPages = [
            'pos_setting',
            'pos_delivery_zones',
            'pos_sections',
            'pos_point_sales',
            'pos_offers',
            'pos_fund_movements',
            'cashers',
            'pos_coupons',
            'pos_invoice_sales_drafts',
            'pos_dashboard',
            'pos_expenses',
            'pos_invoice_sales_credit_notices', // just for frontend
            'pos_availability_products', //توافر المنتجات
            'pos_reports',
            'pos_expense_vouchers',
            'pos_delivery_men',
            'branches',
        ];

        $actions = [
            'read',
            'write',
            'delete',
            'edit',
            'approve',
        ];

        $seedArray = [
            [
                'permissions' => $corePages,
                'module_id' => 6,
            ],
            [
                'permissions' => $invoicingPages,
                'module_id' => 1,
            ],
            [
                'permissions' => $warehousePages,
                'module_id' => 2,
            ],
            [
                'permissions' => $accountingPages,
                'module_id' => 3,
            ],
            [
                'permissions' => $hrPages,
                'module_id' => 4,
            ],
            [
                'permissions' => $salariesPages,
                'module_id' => 20,
            ],
            [
                'permissions' => $attendancePages,
                'module_id' => 25,
            ],
            [
                'permissions' => $customsPages,
                'module_id' => 30,
            ],
            [
                'permissions' => $transportPages,
                'module_id' => 35,
            ],
            [
                'permissions' => $restaurantPages,
                'module_id' => 40,
            ],
            [
                'permissions' => $eApprovalPages,
                'module_id' => 45,
            ],
            [
                'permissions' => $assetPages,
                'module_id' => 50,
            ],

            [
                'permissions' => $posPages,
                'module_id' => 51,
            ],
        ];

        $permissions = DB::table('permissions')->get();

        $permission_module = DB::table('permission_module')->get();

        foreach ($seedArray as $seed) {
            foreach ($seed['permissions'] as $key => $page) {
                if (is_array($page)) {
                    $custom_actions = $page['actions'];
                    $page = $key;
                } else {
                    $custom_actions = $actions;
                }

                foreach ($custom_actions as $action) {
                    $permission = $permissions->where('name', $action . '_' . $page)->first();

                    if (!$permission) {
                        try {
                            $this->command->line('Add: <info>' . $page . '</info>');

                            $newPer = DB::table('permissions')->insertGetId([
                                'name' => $action . '_' . $page,
                                'guard_name' => 'web',
                            ]);
                            DB::table('permission_module')->insert([
                                'permission_id' => $newPer,
                                'module_id' => $seed['module_id'],
                            ]);
                        } catch (\Throwable $th) {
                            $this->command->line('Add: <info>' . $th->getMessage() . '</info>');
                            // throw $th ;
                        }
                    } else {

                        $permission_module_exists = $permission_module
                            ->where('permission_id', $permission->id)
                            ->where('module_id', $seed['module_id'])
                            ->first();

                        if (!$permission_module_exists) {
                            $this->command->line('Add to Module ' . $seed['module_id'] . ': <info>' . $page . '</info>');

                            DB::table('permission_module')->insert([
                                'permission_id' => $permission->id,
                                'module_id' => $seed['module_id'],
                            ]);
                        }
                    }
                }
            }
        }
    }

    public function getPermissionsChange($permissions, $seedArray, $actions)
    {
        $allP = [];
        foreach ($seedArray as $seed) {
            foreach ($seed['permissions'] as $key => $page) {
                if (is_array($page)) {
                    $custom_actions = $page['actions'];
                    $page = $key;
                } else {
                    $custom_actions = $actions;
                }

                foreach ($custom_actions as $action) {
                    $allP[] = $action . '_' . $page;
                }
            }
        }

        return array_diff(array_unique($allP), $permissions->pluck('name')->toArray());
    }
}
