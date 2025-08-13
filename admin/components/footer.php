<!--Footer-->
			<footer class="main-footer">
				<div class="text-center">
					Developed By<a href="https://bitcoderlabs.com/" target="_blank"> BitCoderLabs pvt Limited</a>
				</div>
			</footer>



			<!--/Footer-->
		</div>

<!-- Back to top -->
<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

<!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <!-- Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
    
    <!-- Perfect Scrollbar -->
    <script src="https://cdn.jsdelivr.net/npm/perfect-scrollbar@1.5.5/dist/perfect-scrollbar.min.js"></script>
    
    <!-- Select2 JS -->
    <script src="./assets/plugins/select2/select2.full.js"></script>
    
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js"></script>
    
    <!-- DataTables Buttons -->
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.bootstrap4.min.js"></script>
    
    <!-- Export buttons dependencies -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    
    <!-- Export buttons -->
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.colVis.min.js"></script>

	<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <!-- Custom scripts -->
    <script src="./assets/js/datatable.js"></script>
    <script src="./assets/js/scripts.js"></script>
    
    <!-- Initialize Select2 -->
    <script>
        $(document).ready(function() {
            $('.select2').each(function() {
                $(this).select2({
                    width: '100%',
                    dropdownAutoWidth: true,
                    dropdownParent: $(this).parent()
                });
            });
            
            // Initialize developer table with DataTable but preserve our styling
            if ($('#developer-table').length) {
                $('#developer-table').DataTable({
                    "initComplete": function(settings, json) {
                        $('#developer-table thead tr').css({
                            'background': 'linear-gradient(to bottom right, #7673e6, #8483f5)',
                            'color': 'white'
                        });
                    }
                });
            }
        });
    </script>
    
    <style>
        /* Custom styles for developer table */
        #developer-table thead tr {
            background: linear-gradient(to bottom right, #7673e6, #8483f5) !important;
            color: white !important;
        }
        
        /* Ensure DataTables doesn't override our styles */
        .table.dataTable thead th,
        .table.dataTable thead td,
        table.dataTable thead th,
        table.dataTable thead td {
            background: inherit !important;
            color: inherit !important;
        }
    </style>

	</body>
</html>
