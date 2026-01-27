<div>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Estilos -->
    <style>
        body {
            font-family: 'Space Grotesk', sans-serif;
            background-color: #ffffff;
            color: #212529;
        }

        .table-container {
            border: 1px solid #dee2e6;
            border-radius: 0.75rem;
            overflow: hidden;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
            background: #fff;
        }

        .table thead th {
            background-color: #f8f9fa;
            text-transform: uppercase;
            font-size: 0.75rem;
            letter-spacing: 0.05em;
            color: #6c757d;
            padding: 1rem 1.25rem;
            vertical-align: middle;
        }

        .table tbody td {
            padding: 0.85rem 1.25rem;
            vertical-align: middle;
            font-size: 0.875rem;
        }

        .badge-scheduled {
            background-color: rgba(13, 110, 253, 0.1);
            color: #0d6efd;
            font-weight: 500;
            border-radius: 50rem;
            padding: 0.35em 0.8em;
        }

        .action-btn {
            background: none;
            border: none;
            color: #6c757d;
            padding: 6px;
            border-radius: 50%;
            transition: all 0.2s;
        }

        .action-btn:hover {
            background-color: #f8f9fa;
            color: #0d6efd;
        }

        .action-btn.btn-cancel:hover {
            background-color: #fff5f5;
            color: #dc3545;
        }

        /* 🔥 RESPONSIVE TABLE (CARD STYLE MOBILE) */
        @media (max-width: 768px) {

            main {
                padding-left: 0 !important;
                padding-right: 0 !important;
            }

            .table-container {
                border-radius: 0;
                border-left: 0;
                border-right: 0;
            }

            table thead {
                display: none;
            }

            table,
            table tbody,
            table tr,
            table td {
                display: block;
                width: 100%;
            }

            table tr {
                background: #ffffff;
                border: 1px solid #dee2e6;
                border-radius: 0.75rem;
                margin: 0.75rem;
                padding: 0.75rem;
                box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, .05);
            }

            table td {
                border: none;
                padding: 0.45rem 0;
                display: flex;
                justify-content: space-between;
                align-items: center;
                font-size: 0.85rem;
            }

            table td::before {
                content: attr(data-label);
                font-weight: 600;
                color: #6c757d;
                font-size: 0.7rem;
                text-transform: uppercase;
            }

            table td.text-end {
                justify-content: flex-end;
                gap: 0.5rem;
            }
        }

        /* FAB */
        .fab-btn {
            position: fixed;
            bottom: 80px;
            right: 20px;
            width: 56px;
            height: 56px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            z-index: 1000;
        }
    </style>

    <!-- CONTENIDO -->
    <main class="container-fluid px-0 px-md-4 py-4">
        <div class="container px-3 px-md-0">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-4 gap-3">
                <button class="btn btn-primary d-flex align-items-center gap-2 px-4">
                    <span class="material-symbols-outlined fs-6">add</span>
                    Agregar
                </button>
            </div>
        </div>

        <div class="container-fluid px-0">
            <div class="table-container">
                <div class="table-responsive">
                    <table class="table table-hover table-striped mb-0">
                        <thead>
                            <tr>
                                <th>Date & Time</th>
                                <th>Game</th>
                                <th>Location</th>
                                <th>Teams</th>
                                <th>Status</th>
                                <th class="text-end">Actions</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td data-label="Date & Time" class="fw-medium">July 15, 2024, 7:00 PM</td>
                                <td data-label="Game">Soccer</td>
                                <td data-label="Location">City Park Field</td>
                                <td data-label="Teams">Team A vs. Team B</td>
                                <td data-label="Status">
                                    <span class="badge badge-scheduled">Scheduled</span>
                                </td>
                                <td data-label="Actions" class="text-end">
                                    <button class="action-btn">
                                        <span class="material-symbols-outlined fs-6">edit</span>
                                    </button>
                                    <button class="action-btn btn-cancel">
                                        <span class="material-symbols-outlined fs-6">cancel</span>
                                    </button>
                                </td>
                            </tr>

                            <tr>
                                <td data-label="Date & Time" class="fw-medium">July 16, 2024, 8:30 PM</td>
                                <td data-label="Game">Basketball</td>
                                <td data-label="Location">Community Center Gym</td>
                                <td data-label="Teams">Team C vs. Team D</td>
                                <td data-label="Status">
                                    <span class="badge badge-scheduled">Scheduled</span>
                                </td>
                                <td data-label="Actions" class="text-end">
                                    <button class="action-btn">
                                        <span class="material-symbols-outlined fs-6">edit</span>
                                    </button>
                                    <button class="action-btn btn-cancel">
                                        <span class="material-symbols-outlined fs-6">cancel</span>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</div>