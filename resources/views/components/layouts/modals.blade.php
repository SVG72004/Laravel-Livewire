<!-- Add User Modal -->
<div class="modal fade" id="addUser" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-simple modal-edit-user">
        <div class="modal-content p-3 p-md-5">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="text-center mb-4">
                    <h3 class="mb-2">Add User Information</h3>
                </div>
                <form id="UserForm1" class="row g-3" method="post" action="" >
                    @csrf
                    <div class="col-12 col-md-6">
                        <label class="form-label" for="name">Name</label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="John Doe" />
                        <p></p>
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label" for="phone_number">Phone Number</label>
                        <div class="input-group">
                             <!--<span class="input-group-text">US (+1)</span> -->
                            <input type="text" id="phone_number" name="phone_number" class="form-control" placeholder="9866586958" />
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label" for="country">Country</label>
                        <select id="country" class="form-select" name="country">
                            <option value="" selected>Select Country</option>
                            <option value="BH">BH</option>
                            <option value="KW">KW</option>
                            <option value="OM">OM</option>
                            <option value="QA">QA</option>
                            <option value="SA">SA</option>
                            <option value="UAE">UAE</option>
                        </select>
                        <p></p>
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label" for="device_type">Device Type</label>
                        <select id="device_type" class="form-select" name="device_type">
                            <option value="" selected>Select Device Type</option>
                            <option value="1">Android</option>
                            <option value="2">iOS</option>
                        </select>
                        <p></p>
                    </div>
                    <div class="col-12 col-md-6 otp">
                        <label class="form-label" for="otp">OTP</label>
                        <input type="text" id="otp" name="otp" class="form-control" placeholder="12345" />
                        <p></p>
                    </div>
                    <div class="col-12 col-md-6 points">
                        <label class="form-label" for="points">Points</label>
                        <input type="text" id="points" name="points" class="form-control" placeholder="1.00" />
                        <p></p>
                    </div>
                    <!--<div class="col-12 col-md-6 email">-->
                    <!--    <label class="form-label" for="email">Email</label>-->
                    <!--    <input type="text" id="email" name="email" onkeyup="checkEmail()" class="form-control" placeholder="example@domain.com" />-->
                    <!--    <p></p>-->
                    <!--</div>-->
                    <div class="col-12 col-md-6">
                        <label class="form-label" for="password">Password</label>
                        <input type="password" id="password" name="password" class="form-control" placeholder="············" />
                        <p></p>
                    </div>

                    <div class="col-12 col-md-6">
                        <label class="form-label" for="confirm_password">Confirm Password</label>
                        <input type="password" id="confirm_password" name="confirm_password" class="form-control" placeholder="············" />
                        <p></p>
                    </div>

                    {{--  <div class="col-12 col-md-6">
                        <label class="form-label" for="user-role">User Role</label>
                        <select id="role" class="form-select" name="role">
                            <option value="" selected>Select Role</option>
                            @if(!empty(get_roles()))
                            @foreach(get_roles() as $key => $value)
                            <option value="{{$value->id}}">{{$value->name}}</option>
                            @endforeach
                            @endif
                        </select>
                        <p></p>
                    </div>  --}}
                    <div class="col-12 col-md-6">
                        <label class="form-label" for="status">Status</label>
                        <select id="status" class="form-select" name="status">
                            <option value="" selected>Select Status</option>
                            <option value="1">Active</option>
                            <option value="0">In-Active</option>
                        </select>
                        <p></p>
                    </div>

                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-primary me-sm-3 me-1">Add</button>
                        <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">
                            Cancel
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--/ Add User Modal -->


<!-- Edit User Modal -->
<div class="modal fade" id="editUser" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-simple modal-edit-user">
        <div class="modal-content p-3 p-md-5">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="text-center mb-4">
                    <h3 class="mb-2">Edit User Information</h3>
                </div>
                <form id="updateUserForm" class="row g-3" method="post" action="">
                    @csrf
                    <input type="hidden" name="update_id" id="update_id" value="">
                    <div class="col-12 col-md-6">
                        <label class="form-label" for="name">Name</label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="John Doe" />
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label" for="phone_number">Phone Number</label>
                        <div class="input-group">
                            <!-- <span class="input-group-text">US (+1)</span> -->
                            <input type="text" id="phone_number" name="phone_number" class="form-control" placeholder="9866586958" />
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label" for="country">Country</label>
                        <select id="country" class="form-select" name="country">
                            <option value="" selected>Select Country</option>
                            <option value="BH">BH</option>
                            <option value="KW">KW</option>
                            <option value="OM">OM</option>
                            <option value="QA">QA</option>
                            <option value="SA">SA</option>
                            <option value="UAE">UAE</option>
                        </select>
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label" for="device_type">Device Type</label>
                        <select id="device_type" class="form-select" name="device_type">
                            <option value="" selected>Select Device Type</option>
                            <option value="1">Android</option>
                            <option value="2">iOS</option>
                        </select>
                    </div>
                    <div class="col-12 col-md-6 otp">
                        <label class="form-label" for="otp">OTP</label>
                        <input type="text" id="otp" name="otp" class="form-control" placeholder="12345" />
                    </div>
                    <div class="col-12 col-md-6 points">
                        <label class="form-label" for="points">Points</label>
                        <input type="text" id="points" name="points" class="form-control" placeholder="1.00" />
                    </div>
                    <!--<div class="col-12 col-md-6 email">-->
                    <!--    <label class="form-label" for="email">Email</label>-->
                    <!--    <input type="text" id="email" name="email" onkeyup="checkEmail()" class="form-control" placeholder="example@domain.com" />-->
                    <!--</div>-->



                    <!--<div class="col-12 col-md-6">-->
                    <!--    <label class="form-label" for="password">Password</label>-->
                    <!--    <input type="password" id="password" name="password" class="form-control" placeholder="············" />-->
                    <!--</div>-->

                    <!--<div class="col-12 col-md-6">-->
                    <!--    <label class="form-label" for="confirm_password">Confirm Password</label>-->
                    <!--    <input type="password" id="confirm_password" name="confirm_password" class="form-control" placeholder="············" />-->
                    <!--</div>-->

                    <div class="col-12 col-md-6">
                        <label class="form-label" for="new_status">Status</label>
                        <select id="new_status" class="form-select" name="new_status">
                            <option value="" selected>Select Status</option>
                            <option value="1">Active</option>
                            <option value="0">In-Active</option>
                        </select>
                    </div>
                    {{--  <div class="col-12 col-md-6">
                        <label class="form-label" for="user-role">User Role</label>
                        <select id="user-role" class="form-select" name="role">
                            <option value="" selected>Select Role</option>
                            @if(!empty(get_roles()))
                            @foreach(get_roles() as $key => $value)
                            <option value="{{$value->id}}">{{$value->name}}</option>
                            @endforeach
                            @endif
                        </select>
                    </div>  --}}
                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-primary me-sm-3 me-1">Update</button>
                        <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">
                            Cancel
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--/ Edit User Modal -->

<!-- Add Role Modal -->
<!-- Add Role Modal -->
<div class="modal fade" id="addRoleModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-add-new-role">
    <div class="modal-content p-3 p-md-5">
        <button type="button" class="btn-close btn-pinned" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="modal-body">
        <div class="text-center mb-4">
            <h3 class="role-title mb-2">Add New Role</h3>
            <p class="text-muted">Set role permissions</p>
        </div>
        <!-- Add role form -->
        <form id="addRoleForm" class="row g-3" onsubmit="return false" method="post" action="">
            @csrf
            <div class="col-12 mb-4">
            <label class="form-label" for="modalRoleName">Role Name</label>
            <input type="text" id="modalRoleName" name="modalRoleName" class="form-control" placeholder="Enter a role name" tabindex="-1" />
            </div>
            <div class="col-12">
            <h5>Permissions</h5>
            <!-- Permission table -->
            <div class="table-responsive">
                <table class="table table-flush-spacing">
                <tbody>
                    <!-- <tr>
                    <td class="text-nowrap fw-semibold">
                        Administrator Access
                        <i class="ti ti-info-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="Allows a full access to the system"></i>
                    </td>
                    <td>
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="selectAll" name="all_permission" value="all" />
                        <label class="form-check-label" for="selectAll"> Select All </label>
                        </div>
                    </td>
                    </tr> -->
                    <tr>
                        <td class="text-nowrap fw-semibold">Role Management</td>
                        <td>
                            <div class="d-flex">
                            <div class="form-check me-3 me-lg-5">
                                <input class="form-check-input" type="checkbox" id="roleManagementRead" name="permissions[role_management][]" value="list" />
                                <label class="form-check-label" for="roleManagementRead"> List </label>
                            </div>
                            <div class="form-check me-3 me-lg-5">
                                <input class="form-check-input" type="checkbox" id="roleManagementCreate" name="permissions[role_management][]" value="create" />
                                <label class="form-check-label" for="roleManagementCreate"> Create </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="roleManagementWrite" name="permissions[role_management][]" value="update" />
                                <label class="form-check-label" for="roleManagementWrite"> Update </label>
                            </div>
                            <div class="form-check mx-4">
                                <input class="form-check-input" type="checkbox" id="roleManagementDelete" name="permissions[role_management][]" value="delete" />
                                <label class="form-check-label" for="roleManagementCreate"> Delete </label>
                            </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-nowrap fw-semibold">User Management</td>
                        <td>
                            <div class="d-flex">
                            <div class="form-check me-3 me-lg-5">
                                <input class="form-check-input" type="checkbox" id="userManagementRead" name="permissions[user_management][]" value="list" />
                                <label class="form-check-label" for="userManagementRead"> List </label>
                            </div>
                            <div class="form-check me-3 me-lg-5">
                                <input class="form-check-input" type="checkbox" id="userManagementCreate" name="permissions[user_management][]" value="create" />
                                <label class="form-check-label" for="userManagementCreate"> Create </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="userManagementWrite" name="permissions[user_management][]" value="update" />
                                <label class="form-check-label" for="userManagementWrite"> Update </label>
                            </div>
                            <div class="form-check mx-4">
                                <input class="form-check-input" type="checkbox" id="userManagementDelete" name="permissions[user_management][]" value="delete" />
                                <label class="form-check-label" for="userManagementCreate"> Delete </label>
                            </div>
                            </div>
                        </td>
                    </tr>
                    <!-- <tr>
                    <td class="text-nowrap fw-semibold">Content Management</td>
                    <td>
                        <div class="d-flex">
                        <div class="form-check me-3 me-lg-5">
                            <input class="form-check-input" type="checkbox" id="contentManagementRead" />
                            <label class="form-check-label" for="contentManagementRead"> Read </label>
                        </div>
                        <div class="form-check me-3 me-lg-5">
                            <input class="form-check-input" type="checkbox" id="contentManagementWrite" />
                            <label class="form-check-label" for="contentManagementWrite"> Write </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="contentManagementCreate" />
                            <label class="form-check-label" for="contentManagementCreate"> Create </label>
                        </div>
                        </div>
                    </td>
                    </tr>
                    <tr>
                    <td class="text-nowrap fw-semibold">Disputes Management</td>
                    <td>
                        <div class="d-flex">
                        <div class="form-check me-3 me-lg-5">
                            <input class="form-check-input" type="checkbox" id="dispManagementRead" />
                            <label class="form-check-label" for="dispManagementRead"> Read </label>
                        </div>
                        <div class="form-check me-3 me-lg-5">
                            <input class="form-check-input" type="checkbox" id="dispManagementWrite" />
                            <label class="form-check-label" for="dispManagementWrite"> Write </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="dispManagementCreate" />
                            <label class="form-check-label" for="dispManagementCreate"> Create </label>
                        </div>
                        </div>
                    </td>
                    </tr>
                    <tr>
                    <td class="text-nowrap fw-semibold">Database Management</td>
                    <td>
                        <div class="d-flex">
                        <div class="form-check me-3 me-lg-5">
                            <input class="form-check-input" type="checkbox" id="dbManagementRead" />
                            <label class="form-check-label" for="dbManagementRead"> Read </label>
                        </div>
                        <div class="form-check me-3 me-lg-5">
                            <input class="form-check-input" type="checkbox" id="dbManagementWrite" />
                            <label class="form-check-label" for="dbManagementWrite"> Write </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="dbManagementCreate" />
                            <label class="form-check-label" for="dbManagementCreate"> Create </label>
                        </div>
                        </div>
                    </td>
                    </tr>
                    <tr>
                    <td class="text-nowrap fw-semibold">Financial Management</td>
                    <td>
                        <div class="d-flex">
                        <div class="form-check me-3 me-lg-5">
                            <input class="form-check-input" type="checkbox" id="finManagementRead" />
                            <label class="form-check-label" for="finManagementRead"> Read </label>
                        </div>
                        <div class="form-check me-3 me-lg-5">
                            <input class="form-check-input" type="checkbox" id="finManagementWrite" />
                            <label class="form-check-label" for="finManagementWrite"> Write </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="finManagementCreate" />
                            <label class="form-check-label" for="finManagementCreate"> Create </label>
                        </div>
                        </div>
                    </td>
                    </tr>
                    <tr>
                    <td class="text-nowrap fw-semibold">Reporting</td>
                    <td>
                        <div class="d-flex">
                        <div class="form-check me-3 me-lg-5">
                            <input class="form-check-input" type="checkbox" id="reportingRead" />
                            <label class="form-check-label" for="reportingRead"> Read </label>
                        </div>
                        <div class="form-check me-3 me-lg-5">
                            <input class="form-check-input" type="checkbox" id="reportingWrite" />
                            <label class="form-check-label" for="reportingWrite"> Write </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="reportingCreate" />
                            <label class="form-check-label" for="reportingCreate"> Create </label>
                        </div>
                        </div>
                    </td>
                    </tr>
                    <tr>
                    <td class="text-nowrap fw-semibold">API Control</td>
                    <td>
                        <div class="d-flex">
                        <div class="form-check me-3 me-lg-5">
                            <input class="form-check-input" type="checkbox" id="apiRead" />
                            <label class="form-check-label" for="apiRead"> Read </label>
                        </div>
                        <div class="form-check me-3 me-lg-5">
                            <input class="form-check-input" type="checkbox" id="apiWrite" />
                            <label class="form-check-label" for="apiWrite"> Write </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="apiCreate" />
                            <label class="form-check-label" for="apiCreate"> Create </label>
                        </div>
                        </div>
                    </td>
                    </tr>
                    <tr>
                    <td class="text-nowrap fw-semibold">Repository Management</td>
                    <td>
                        <div class="d-flex">
                        <div class="form-check me-3 me-lg-5">
                            <input class="form-check-input" type="checkbox" id="repoRead" />
                            <label class="form-check-label" for="repoRead"> Read </label>
                        </div>
                        <div class="form-check me-3 me-lg-5">
                            <input class="form-check-input" type="checkbox" id="repoWrite" />
                            <label class="form-check-label" for="repoWrite"> Write </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="repoCreate" />
                            <label class="form-check-label" for="repoCreate"> Create </label>
                        </div>
                        </div>
                    </td>
                    </tr>
                    <tr>
                    <td class="text-nowrap fw-semibold">Payroll</td>
                    <td>
                        <div class="d-flex">
                        <div class="form-check me-3 me-lg-5">
                            <input class="form-check-input" type="checkbox" id="payrollRead" />
                            <label class="form-check-label" for="payrollRead"> Read </label>
                        </div>
                        <div class="form-check me-3 me-lg-5">
                            <input class="form-check-input" type="checkbox" id="payrollWrite" />
                            <label class="form-check-label" for="payrollWrite"> Write </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="payrollCreate" />
                            <label class="form-check-label" for="payrollCreate"> Create </label>
                        </div>
                        </div>
                    </td>
                    </tr> -->
                </tbody>
                </table>
            </div>
            <!-- Permission table -->
            </div>
            <div class="col-12 text-center mt-4">
            <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
            <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">
                Cancel
            </button>
            </div>
        </form>
        <!--/ Add role form -->
        </div>
    </div>
    </div>
</div>
<!--/ Add Role Modal -->

<!-- / Add Role Modal -->


<!-- Edit Role Modal -->
<!-- Edit Role Modal -->
<div class="modal fade" id="editRole" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-add-new-role">
    <div class="modal-content p-3 p-md-5">
        <button type="button" class="btn-close btn-pinned" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="modal-body">
        <div class="text-center mb-4">
            <h3 class="role-title mb-2">Edit Role</h3>
            <p class="text-muted">Set role permissions</p>
        </div>
        <!-- Add role form -->
        <form id="updateRoleForm" class="row g-3" method="post" action="">
            @csrf
            <input type="hidden" name="update_role_id" id="update_role_id">
            <div class="col-12 mb-4">
            <label class="form-label" for="modalRoleName">Role Name</label>
            <input type="text" id="updatemodalRoleName" name="modalRoleName" class="form-control" placeholder="Enter a role name" tabindex="-1" />
            </div>
            <div class="col-12">
            <h5>Role Permissions</h5>
            <!-- Permission table -->
            <div class="table-responsive">
                <table class="table table-flush-spacing">
                <tbody>
                    <!-- <tr>
                    <td class="text-nowrap fw-semibold">
                        Administrator Access
                        <i class="ti ti-info-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="Allows a full access to the system"></i>
                    </td>
                    <td class='editRole'>
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="selectAll" name="all_permission" value="all" />
                        <label class="form-check-label" for="selectAll"> Select All </label>
                        </div>
                    </td>
                    </tr> -->
                    <tr>
                        <td class="text-nowrap fw-semibold">Role Management</td>
                        <td class="management">
                            <div class="d-flex">
                            <div class="form-check me-3 me-lg-5">
                                <input class="form-check-input" data-type="role_management" type="checkbox" id="roleManagementReadUpdate" name="permissions[role_management][]" value="list" />
                                <label class="form-check-label" for="roleManagementRead"> List </label>
                            </div>
                            <div class="form-check me-3 me-lg-5">
                                <input class="form-check-input" data-type="role_management" type="checkbox" id="roleManagementCreateUpdate" name="permissions[role_management][]" value="create" />
                                <label class="form-check-label" for="roleManagementCreate"> Create </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" data-type="role_management" type="checkbox" id="roleManagementUpdate" name="permissions[role_management][]" value="update" />
                                <label class="form-check-label" for="roleManagementWrite"> Update </label>
                            </div>
                            <div class="form-check mx-4">
                                <input class="form-check-input" data-type="role_management" type="checkbox" id="roleManagementDeleteUpdate" name="permissions[role_management][]" value="delete" />
                                <label class="form-check-label" for="roleManagementCreate"> Delete </label>
                            </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                    <td class="text-nowrap fw-semibold">User Management</td>
                    <td class="management">
                        <div class="d-flex">
                        <div class="form-check me-3 me-lg-5">
                            <input class="form-check-input" data-type="user_management" type="checkbox" id="userManagementReadUpdate" name="permissions[user_management][]" value="list" />
                            <label class="form-check-label" for="userManagementRead"> List </label>
                        </div>
                        <div class="form-check me-3 me-lg-5">
                            <input class="form-check-input" data-type="user_management" type="checkbox" id="userManagementCreateUpdate" name="permissions[user_management][]" value="create" />
                            <label class="form-check-label" for="userManagementCreate"> Create </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" data-type="user_management" type="checkbox" id="userManagementWriteUpdate" name="permissions[user_management][]" value="update" />
                            <label class="form-check-label" for="userManagementWrite"> Update </label>
                        </div>
                        <div class="form-check mx-4">
                            <input class="form-check-input" data-type="user_management" type="checkbox" id="userManagementDeleteUpdate" name="permissions[user_management][]" value="delete" />
                            <label class="form-check-label" for="userManagementCreate"> Delete </label>
                        </div>
                        </div>
                    </td>
                    </tr>
                    <!-- <tr>
                    <td class="text-nowrap fw-semibold">Content Management</td>
                    <td>
                        <div class="d-flex">
                        <div class="form-check me-3 me-lg-5">
                            <input class="form-check-input" type="checkbox" id="contentManagementRead" />
                            <label class="form-check-label" for="contentManagementRead"> Read </label>
                        </div>
                        <div class="form-check me-3 me-lg-5">
                            <input class="form-check-input" type="checkbox" id="contentManagementWrite" />
                            <label class="form-check-label" for="contentManagementWrite"> Write </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="contentManagementCreate" />
                            <label class="form-check-label" for="contentManagementCreate"> Create </label>
                        </div>
                        </div>
                    </td>
                    </tr>
                    <tr>
                    <td class="text-nowrap fw-semibold">Disputes Management</td>
                    <td>
                        <div class="d-flex">
                        <div class="form-check me-3 me-lg-5">
                            <input class="form-check-input" type="checkbox" id="dispManagementRead" />
                            <label class="form-check-label" for="dispManagementRead"> Read </label>
                        </div>
                        <div class="form-check me-3 me-lg-5">
                            <input class="form-check-input" type="checkbox" id="dispManagementWrite" />
                            <label class="form-check-label" for="dispManagementWrite"> Write </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="dispManagementCreate" />
                            <label class="form-check-label" for="dispManagementCreate"> Create </label>
                        </div>
                        </div>
                    </td>
                    </tr>
                    <tr>
                    <td class="text-nowrap fw-semibold">Database Management</td>
                    <td>
                        <div class="d-flex">
                        <div class="form-check me-3 me-lg-5">
                            <input class="form-check-input" type="checkbox" id="dbManagementRead" />
                            <label class="form-check-label" for="dbManagementRead"> Read </label>
                        </div>
                        <div class="form-check me-3 me-lg-5">
                            <input class="form-check-input" type="checkbox" id="dbManagementWrite" />
                            <label class="form-check-label" for="dbManagementWrite"> Write </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="dbManagementCreate" />
                            <label class="form-check-label" for="dbManagementCreate"> Create </label>
                        </div>
                        </div>
                    </td>
                    </tr>
                    <tr>
                    <td class="text-nowrap fw-semibold">Financial Management</td>
                    <td>
                        <div class="d-flex">
                        <div class="form-check me-3 me-lg-5">
                            <input class="form-check-input" type="checkbox" id="finManagementRead" />
                            <label class="form-check-label" for="finManagementRead"> Read </label>
                        </div>
                        <div class="form-check me-3 me-lg-5">
                            <input class="form-check-input" type="checkbox" id="finManagementWrite" />
                            <label class="form-check-label" for="finManagementWrite"> Write </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="finManagementCreate" />
                            <label class="form-check-label" for="finManagementCreate"> Create </label>
                        </div>
                        </div>
                    </td>
                    </tr>
                    <tr>
                    <td class="text-nowrap fw-semibold">Reporting</td>
                    <td>
                        <div class="d-flex">
                        <div class="form-check me-3 me-lg-5">
                            <input class="form-check-input" type="checkbox" id="reportingRead" />
                            <label class="form-check-label" for="reportingRead"> Read </label>
                        </div>
                        <div class="form-check me-3 me-lg-5">
                            <input class="form-check-input" type="checkbox" id="reportingWrite" />
                            <label class="form-check-label" for="reportingWrite"> Write </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="reportingCreate" />
                            <label class="form-check-label" for="reportingCreate"> Create </label>
                        </div>
                        </div>
                    </td>
                    </tr>
                    <tr>
                    <td class="text-nowrap fw-semibold">API Control</td>
                    <td>
                        <div class="d-flex">
                        <div class="form-check me-3 me-lg-5">
                            <input class="form-check-input" type="checkbox" id="apiRead" />
                            <label class="form-check-label" for="apiRead"> Read </label>
                        </div>
                        <div class="form-check me-3 me-lg-5">
                            <input class="form-check-input" type="checkbox" id="apiWrite" />
                            <label class="form-check-label" for="apiWrite"> Write </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="apiCreate" />
                            <label class="form-check-label" for="apiCreate"> Create </label>
                        </div>
                        </div>
                    </td>
                    </tr>
                    <tr>
                    <td class="text-nowrap fw-semibold">Repository Management</td>
                    <td>
                        <div class="d-flex">
                        <div class="form-check me-3 me-lg-5">
                            <input class="form-check-input" type="checkbox" id="repoRead" />
                            <label class="form-check-label" for="repoRead"> Read </label>
                        </div>
                        <div class="form-check me-3 me-lg-5">
                            <input class="form-check-input" type="checkbox" id="repoWrite" />
                            <label class="form-check-label" for="repoWrite"> Write </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="repoCreate" />
                            <label class="form-check-label" for="repoCreate"> Create </label>
                        </div>
                        </div>
                    </td>
                    </tr>
                    <tr>
                    <td class="text-nowrap fw-semibold">Payroll</td>
                    <td>
                        <div class="d-flex">
                        <div class="form-check me-3 me-lg-5">
                            <input class="form-check-input" type="checkbox" id="payrollRead" />
                            <label class="form-check-label" for="payrollRead"> Read </label>
                        </div>
                        <div class="form-check me-3 me-lg-5">
                            <input class="form-check-input" type="checkbox" id="payrollWrite" />
                            <label class="form-check-label" for="payrollWrite"> Write </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="payrollCreate" />
                            <label class="form-check-label" for="payrollCreate"> Create </label>
                        </div>
                        </div>
                    </td>
                    </tr> -->
                </tbody>
                </table>
            </div>
            <!-- Permission table -->
            </div>
            <div class="col-12 text-center mt-4">
            <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
            <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">
                Cancel
            </button>
            </div>
        </form>
        <!--/ Add role form -->
        </div>
    </div>
    </div>
</div>
<!--/ Edit Role Modal -->

<!-- / Edit Role Modal -->
