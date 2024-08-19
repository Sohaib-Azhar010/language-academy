                   
                    
                </div>
            </div>


        </div>

       
        <!-- End Custom template -->
    </div>
    <!--   Core JS Files   -->
    <script src="assets/js/core/jquery-3.7.1.min.js"></script>
    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/core/bootstrap.min.js"></script>

    <!-- jQuery Scrollbar -->
    <script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

    <!-- Chart JS -->
    <script src="assets/js/plugin/chart.js/chart.min.js"></script>

    <!-- jQuery Sparkline -->
    <script src="assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

    <!-- Chart Circle -->
    <script src="assets/js/plugin/chart-circle/circles.min.js"></script>

    <!-- Datatables -->
    <script src="assets/js/plugin/datatables/datatables.min.js"></script>

    <!-- Bootstrap Notify -->
    {{-- <script src="assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script> --}}

    <!-- jQuery Vector Maps -->
    <script src="assets/js/plugin/jsvectormap/jsvectormap.min.js"></script>
    <script src="assets/js/plugin/jsvectormap/world.js"></script>

    <!-- Sweet Alert -->
    <script src="assets/js/plugin/sweetalert/sweetalert.min.js"></script>

    <!-- Kaiadmin JS -->
    <script src="assets/js/kaiadmin.min.js"></script>

    <!-- Kaiadmin DEMO methods, don't include it in your project! -->
    <script src="assets/js/setting-demo.js"></script>
    <script src="assets/js/demo.js"></script>


  <!-- Include SheetJS from jsDelivr CDN -->
  <script src="https://cdn.jsdelivr.net/npm/xlsx@0.18.5/dist/xlsx.full.min.js"></script>

<script>
    document.getElementById('downloadExcel').addEventListener('click', function() {
        // Make AJAX request to fetch all enrollment data
        fetch('{{ route('enrollments.export') }}')
            .then(response => response.json())
            .then(data => {
                // Prepare data for SheetJS
                var excelData = [['Full Name', 'Email', 'Country', 'Age', 'Phone', 'Language Course', 'Enrollment Date']];
                
                data.forEach(function(enrollment) {
                    excelData.push([
                        enrollment.full_name,
                        enrollment.email,
                        enrollment.country,
                        enrollment.age,
                        enrollment.phone,
                        enrollment.language_course,
                        new Date(enrollment.enrollment_date).toLocaleDateString()
                    ]);
                });

                // Use SheetJS to generate Excel file
                var ws = XLSX.utils.aoa_to_sheet(excelData);
                var wb = XLSX.utils.book_new();
                XLSX.utils.book_append_sheet(wb, ws, 'Enrollments');

                // Trigger the download
                XLSX.writeFile(wb, 'enrollments.xlsx');
            })
            .catch(error => console.error('Error fetching enrollment data:', error));
    });
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>

<script>
    function printPDF(studentId,studentName) {
        // Get the specific application form element by ID
        var element = document.getElementById('application-form-' + studentId);
        var button = element.querySelector('button');

        if (element) {
            // Hide the print button
            button.style.display = 'none';

            // Use html2pdf.js to convert the HTML to PDF
            html2pdf()
                .set({
                    margin: 10,
                    filename: 'Form_' + studentName + '.pdf',
                    image: {
                        type: 'jpeg',
                        quality: 0.98
                    },
                    html2canvas: {
                        scale: 2
                    },
                    jsPDF: {
                        unit: 'mm',
                        format: 'a4',
                        orientation: 'portrait'
                    }
                })
                .from(element)
                .save()
                .then(() => {
                    // Show the print button again
                    button.style.display = 'inline-block';
                });
        } else {
            console.error('Element not found for student ID:', studentId);
        }
    }
</script>


  


  
</body>

</html>
