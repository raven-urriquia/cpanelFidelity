<div id="rightcontent">
    <div class="header">
        <div class="row">
            <div class="col-xs-7">
                <h3>Transaction History</h3>
            </div>
            <div class="col-xs-5">
                <div class="howdy">

                    <!-- Split button -->
                    <div class="btn-group">
                        <!-- Large button group -->
                        <div class="btn-group">
                            <button class="btn btn-default btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="images/avatar.png" alt=""/> <span>Hi, John Doe!</span>
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">.......</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <div class="container">
        <div class="row">            
            <div class="col-md-4 forAddBtn pull-right">
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon2">Filter</span>
                    <div id="selectBranch"></div>
                </div>
            </div>
        </div>
		
        <div id="content" class="transHistory">
                <div class="noTab">
                    <table id="historyTable" data-toggle="table" class="data-table management ">
                        <thead>
                        <tr>
                            <th>Date &amp; Time</th>
                            <th>Transaction Type</th>
                            <th data-sortable="true">Customer Name</th>
                            <th>Transaction Amount</th>
                            <th>OR No.</th>
                            <th>Branch</th>
                        </tr>
                        </thead>
                        <tbody>
						<?php foreach ($alltransactions as $alltransaction): ?>
                        <tr>
                            <td><?= $alltransaction['timestamp'] ?></td>
                            <td><?= $alltransaction['transactionType'] ?></td>
                            <td><?= $alltransaction['firstName'] ?> <?= $alltransaction['lastName'] ?></td>
                            <td>P <?= $alltransaction['amountPaidWithCash'] ?></td>
                            <td><?= $alltransaction['receiptReferenceNumber'] ?></td>
                            <td><?= $alltransaction['branchName'] ?></td>
                        </tr>
						<?php endforeach; ?>
                        </tbody>
                    </table>
                </div><!--noTab-->
            </div>
        </div><!--/content-->
    </div> <!-- /container -->
</div> <!--rightcontent-->

<script>

$(document).ready(function() {
    $('#historyTable').DataTable( {
        initComplete: function () {
            this.api().columns(5).every( function () {
                var column = this;
                var select = $('<select><option value="">All Branches</option></select>')
                    .appendTo('#selectBranch')
                    .on( 'change', function () {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );
 
                        column
                            .search( val ? '^'+val+'$' : '', true, false )
                            .draw();
                    } );
 
                column.data().unique().sort().each( function ( d, j ) {
                    select.append( '<option value="'+d+'">'+d+'</option>' )
                } );
            } );
        }
    } );
} );
</script>