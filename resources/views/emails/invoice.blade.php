

<html>
	<head>
		<style>
			body {
			font-family: "Open Sans", sans-serif;
			line-height: 1.25;
			}

			table {

			border :1px solid #ccc;
			border-collapse: collapse;
			padding: 0;
			margin: 0;
			width: 100%;
			}

			caption {

			font-size: 2em;
				margin: .25em 0 .75em;
			}

			table tr {
				background: #f8f8f8;
				border: 1px solid #ccc;
				padding: .35em;
			}

			table th,
			table td {
				padding: .625em;
				text-align: center;
			}

			table th {
				font-size: .85em;
				letter-spacing: .1em;
				text-transform: uppercase;
			}

			/* Media Queries*/

			@media screen and (max-width: 600px) {
				table {
					border: 0;
				}
				table caption {
					font-size: 1.3em;
				}
				table thead {
					display: none;
				}
				table tr {
					border-bottom: 3px solid #ddd;
					display: block;
					margin-bottom: .625em;
				}
				table td {
					border-bottom: 1px solid #ddd;
					display: block;
					font-size: .8em;
					text-align: right;
				}
				table td:before {
					content: attr(data-label);
					float: left;
					font-weight: bold;
					text-transform: uppercase;
				}
				table td:last-child {
					border-bottom: 0;
				}
			}

			/* Media Queries*/
		</style>
	</head>
  	<body>
		<table>
			<caption>Thankyou, {{$name}} for purchasing the {{$type}}. 
			You can view the details of the purchase through links below. </caption>
			<thead>
				<tr>
					<th>Type</td>
					<th>Receipt link</td>
					<th>Invoice link</td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td data-label="type">{{$type}}</td>
					<td data-label="reciept_link">{{$reciept_link}}</td>
					<td data-label="invoice_link">{{$invoice_link}}</td> 
				</tr>
			</tbody>
		</table>
</body>
<html>