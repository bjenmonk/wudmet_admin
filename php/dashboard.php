 <!-- Dashboard Content -->
 <div class="row">
      <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h2">Dashboard</h1>
        <div>
          <button class="btn btn-sm btn-outline-secondary me-2">
            <i class="fas fa-download"></i> Export
          </button>
          <button class="btn btn-sm btn-primary">
            <i class="fas fa-plus"></i> Add New
          </button>
        </div>
      </div>

      <!-- Stats Row -->
      <div class="row">
        <div class="col-md-6 col-xl-3 mb-4">
          <div class="card stat-card stat-card-primary h-100">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div>
                  <h6 class="text-muted fw-normal mt-0">Total Revenue</h6>
                  <h3>$21,456</h3>
                </div>
                <div class="stat-icon">
                  <i class="fas fa-dollar-sign"></i>
                </div>
              </div>
              <p class="mb-0 text-muted">
                <span class="text-success me-2"><i class="fas fa-arrow-up"></i> 17.8%</span>
                <span class="text-nowrap">Since last month</span>
              </p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-xl-3 mb-4">
          <div class="card stat-card stat-card-success h-100">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div>
                  <h6 class="text-muted fw-normal mt-0">Total Orders</h6>
                  <h3>1,753</h3>
                </div>
                <div class="stat-icon">
                  <i class="fas fa-shopping-bag"></i>
                </div>
              </div>
              <p class="mb-0 text-muted">
                <span class="text-danger me-2"><i class="fas fa-arrow-down"></i> 4.3%</span>
                <span class="text-nowrap">Since last month</span>
              </p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-xl-3 mb-4">
          <div class="card stat-card stat-card-info h-100">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div>
                  <h6 class="text-muted fw-normal mt-0">Total Customers</h6>
                  <h3>945</h3>
                </div>
                <div class="stat-icon">
                  <i class="fas fa-users"></i>
                </div>
              </div>
              <p class="mb-0 text-muted">
                <span class="text-success me-2"><i class="fas fa-arrow-up"></i> 8.5%</span>
                <span class="text-nowrap">Since last month</span>
              </p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-xl-3 mb-4">
          <div class="card stat-card stat-card-warning h-100">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div>
                  <h6 class="text-muted fw-normal mt-0">Total Products</h6>
                  <h3>128</h3>
                </div>
                <div class="stat-icon">
                  <i class="fas fa-box"></i>
                </div>
              </div>
              <p class="mb-0 text-muted">
                <span class="text-success me-2"><i class="fas fa-arrow-up"></i> 12.7%</span>
                <span class="text-nowrap">Since last month</span>
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- Charts Row -->
      <div class="row">
        <div class="col-lg-8 mb-4">
          <div class="card h-100">
            <div class="card-header d-flex justify-content-between align-items-center">
              <h5 class="card-title mb-0">Revenue Overview</h5>
              <div class="dropdown">
                <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  This Year
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item" href="#">This Month</a></li>
                  <li><a class="dropdown-item" href="#">This Quarter</a></li>
                  <li><a class="dropdown-item" href="#">This Year</a></li>
                </ul>
              </div>
            </div>
            <div class="card-body">
              <div class="chart-container">
                <canvas id="revenueChart"></canvas>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <div class="card-header">
              <h5 class="card-title mb-0">Traffic Sources</h5>
            </div>
            <div class="card-body">
              <div class="chart-container">
                <canvas id="trafficChart"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Recent Orders -->
      <div class="row">
        <div class="col-12 mb-4">
          <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
              <h5 class="card-title mb-0">Recent Orders</h5>
              <a href="#" class="btn btn-sm btn-link">View All</a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">Order ID</th>
                      <th scope="col">Customer</th>
                      <th scope="col">Product</th>
                      <th scope="col">Date</th>
                      <th scope="col">Amount</th>
                      <th scope="col">Status</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>#ORD-0001</td>
                      <td>John Smith</td>
                      <td>Product A</td>
                      <td>Apr 15, 2025</td>
                      <td>$120.00</td>
                      <td><span class="badge bg-success">Completed</span></td>
                      <td>
                        <div class="dropdown">
                          <button class="btn btn-sm" type="button" id="dropdownAction1" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-ellipsis-v"></i>
                          </button>
                          <ul class="dropdown-menu" aria-labelledby="dropdownAction1">
                            <li><a class="dropdown-item" href="#">View</a></li>
                            <li><a class="dropdown-item" href="#">Edit</a></li>
                            <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>#ORD-0002</td>
                      <td>Emma Johnson</td>
                      <td>Product B</td>
                      <td>Apr 14, 2025</td>
                      <td>$75.50</td>
                      <td><span class="badge bg-warning text-dark">Pending</span></td>
                      <td>
                        <div class="dropdown">
                          <button class="btn btn-sm" type="button" id="dropdownAction2" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-ellipsis-v"></i>
                          </button>
                          <ul class="dropdown-menu" aria-labelledby="dropdownAction2">
                            <li><a class="dropdown-item" href="#">View</a></li>
                            <li><a class="dropdown-item" href="#">Edit</a></li>
                            <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>#ORD-0003</td>
                      <td>Michael Brown</td>
                      <td>Product C</td>
                      <td>Apr 13, 2025</td>
                      <td>$220.00</td>
                      <td><span class="badge bg-success">Completed</span></td>
                      <td>
                        <div class="dropdown">
                          <button class="btn btn-sm" type="button" id="dropdownAction3" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-ellipsis-v"></i>
                          </button>
                          <ul class="dropdown-menu" aria-labelledby="dropdownAction3">
                            <li><a class="dropdown-item" href="#">View</a></li>
                            <li><a class="dropdown-item" href="#">Edit</a></li>
                            <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>#ORD-0004</td>
                      <td>Sarah Wilson</td>
                      <td>Product D</td>
                      <td>Apr 12, 2025</td>
                      <td>$65.25</td>
                      <td><span class="badge bg-danger">Cancelled</span></td>
                      <td>
                        <div class="dropdown">
                          <button class="btn btn-sm" type="button" id="dropdownAction4" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-ellipsis-v"></i>
                          </button>
                          <ul class="dropdown-menu" aria-labelledby="dropdownAction4">
                            <li><a class="dropdown-item" href="#">View</a></li>
                            <li><a class="dropdown-item" href="#">Edit</a></li>
                            <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>#ORD-0005</td>
                      <td>David Lee</td>
                      <td>Product E</td>
                      <td>Apr 11, 2025</td>
                      <td>$175.75</td>
                      <td><span class="badge bg-info text-dark">Shipped</span></td>
                      <td>
                        <div class="dropdown">
                          <button class="btn btn-sm" type="button" id="dropdownAction5" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-ellipsis-v"></i>
                          </button>
                          <ul class="dropdown-menu" aria-labelledby="dropdownAction5">
                            <li><a class="dropdown-item" href="#">View</a></li>
                            <li><a class="dropdown-item" href="#">Edit</a></li>
                            <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
<!-- Advanced Data Table -->
      <div class="row">
        <div class="col-12 mb-4">
          <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
              <h5 class="card-title mb-0">Advanced Data Table</h5>
              <div>
                <button class="btn btn-sm btn-outline-secondary me-2">
                  <i class="fas fa-file-export"></i> Export Data
                </button>
                <button class="btn btn-sm btn-primary">
                  <i class="fas fa-filter"></i> Filter
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="advancedDataTable"  class="display compact cell-border" style="width:100%">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Category</th>
                      <th>Price</th>
                      <th>Stock</th>
                      <th>Created Date</th>
                      <th>Status</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>PRD-001</td>
                      <td>Laptop Pro X15</td>
                      <td>Electronics</td>
                      <td>$1,299.99</td>
                      <td>45</td>
                      <td>2025-01-15</td>
                      <td><span class="badge bg-success">Active</span></td>
                      <td>
                        <div class="d-flex">
                          <button class="btn btn-sm btn-info me-1" title="View"><i class="fas fa-eye"></i></button>
                          <button class="btn btn-sm btn-warning me-1" title="Edit"><i class="fas fa-edit"></i></button>
                          <button class="btn btn-sm btn-danger" title="Delete"><i class="fas fa-trash"></i></button>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>PRD-002</td>
                      <td>Wireless Headphones</td>
                      <td>Audio</td>
                      <td>$199.99</td>
                      <td>120</td>
                      <td>2025-01-18</td>
                      <td><span class="badge bg-success">Active</span></td>
                      <td>
                        <div class="d-flex">
                          <button class="btn btn-sm btn-info me-1" title="View"><i class="fas fa-eye"></i></button>
                          <button class="btn btn-sm btn-warning me-1" title="Edit"><i class="fas fa-edit"></i></button>
                          <button class="btn btn-sm btn-danger" title="Delete"><i class="fas fa-trash"></i></button>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>PRD-003</td>
                      <td>Smartwatch Series 7</td>
                      <td>Wearables</td>
                      <td>$349.99</td>
                      <td>78</td>
                      <td>2025-01-22</td>
                      <td><span class="badge bg-success">Active</span></td>
                      <td>
                        <div class="d-flex">
                          <button class="btn btn-sm btn-info me-1" title="View"><i class="fas fa-eye"></i></button>
                          <button class="btn btn-sm btn-warning me-1" title="Edit"><i class="fas fa-edit"></i></button>
                          <button class="btn btn-sm btn-danger" title="Delete"><i class="fas fa-trash"></i></button>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>PRD-004</td>
                      <td>Gaming Mouse</td>
                      <td>Accessories</td>
                      <td>$89.99</td>
                      <td>230</td>
                      <td>2025-01-30</td>
                      <td><span class="badge bg-success">Active</span></td>
                      <td>
                        <div class="d-flex">
                          <button class="btn btn-sm btn-info me-1" title="View"><i class="fas fa-eye"></i></button>
                          <button class="btn btn-sm btn-warning me-1" title="Edit"><i class="fas fa-edit"></i></button>
                          <button class="btn btn-sm btn-danger" title="Delete"><i class="fas fa-trash"></i></button>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>PRD-005</td>
                      <td>4K Monitor 32"</td>
                      <td>Electronics</td>
                      <td>$499.99</td>
                      <td>35</td>
                      <td>2025-02-05</td>
                      <td><span class="badge bg-warning text-dark">Low Stock</span></td>
                      <td>
                        <div class="d-flex">
                          <button class="btn btn-sm btn-info me-1" title="View"><i class="fas fa-eye"></i></button>
                          <button class="btn btn-sm btn-warning me-1" title="Edit"><i class="fas fa-edit"></i></button>
                          <button class="btn btn-sm btn-danger" title="Delete"><i class="fas fa-trash"></i></button>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>PRD-006</td>
                      <td>Bluetooth Speaker</td>
                      <td>Audio</td>
                      <td>$129.99</td>
                      <td>0</td>
                      <td>2025-02-10</td>
                      <td><span class="badge bg-danger">Out of Stock</span></td>
                      <td>
                        <div class="d-flex">
                          <button class="btn btn-sm btn-info me-1" title="View"><i class="fas fa-eye"></i></button>
                          <button class="btn btn-sm btn-warning me-1" title="Edit"><i class="fas fa-edit"></i></button>
                          <button class="btn btn-sm btn-danger" title="Delete"><i class="fas fa-trash"></i></button>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>PRD-007</td>
                      <td>Mechanical Keyboard</td>
                      <td>Accessories</td>
                      <td>$149.99</td>
                      <td>85</td>
                      <td>2025-02-18</td>
                      <td><span class="badge bg-success">Active</span></td>
                      <td>
                        <div class="d-flex">
                          <button class="btn btn-sm btn-info me-1" title="View"><i class="fas fa-eye"></i></button>
                          <button class="btn btn-sm btn-warning me-1" title="Edit"><i class="fas fa-edit"></i></button>
                          <button class="btn btn-sm btn-danger" title="Delete"><i class="fas fa-trash"></i></button>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>PRD-008</td>
                      <td>Wireless Charger</td>
                      <td>Accessories</td>
                      <td>$49.99</td>
                      <td>150</td>
                      <td>2025-03-01</td>
                      <td><span class="badge bg-success">Active</span></td>
                      <td>
                        <div class="d-flex">
                          <button class="btn btn-sm btn-info me-1" title="View"><i class="fas fa-eye"></i></button>
                          <button class="btn btn-sm btn-warning me-1" title="Edit"><i class="fas fa-edit"></i></button>
                          <button class="btn btn-sm btn-danger" title="Delete"><i class="fas fa-trash"></i></button>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>	  
      </div>	  