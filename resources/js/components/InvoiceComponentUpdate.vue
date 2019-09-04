<template ref="mychildcomponent">
    <div class="container inv my-5 py-5">
        <tabel>
            <tr>
                <td></td>
                <td><h1 style="background: #0f74a8; color: #ffffff; padding-left: 5px;">INVOICE</h1></td>
            </tr>
            <tr>
                <td width="50%">
                    <span>INVOICE TO</span><br>
                    <span><b>{{customer_name}}</b></span><br>
                    <span>{{customer_address}}</span><br>
                    <span>+880{{customer_mobile}}</span><br>
                    <span>{{customer_email}} </span>
                </td>
                <td>
                    <table>
                        <tbody>
                        <tr>
                            <td>Invoice No</td>
                            <td class="px-3">:</td>
                            <td>0{{order_id}}</td>
                        </tr>

                        <tr>
                            <td>Order Date</td>
                            <td class="px-3">:</td>
                            <td>{{order_date}}</td>
                        </tr>
                        <tr>
                            <td>Account No</td>
                            <td class="px-3">:</td>
                            <td>00{{customer_id}}</td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <table class="item_table" style="margin-top: 20px; width: 100%;margin-bottom: 20px">
                        <thead>
                        <tr>
                            <th scope="col">NO</th>
                            <th scope="col">ITEM NAME</th>
                            <th scope="col">QTY</th>
                            <th scope="col">PRICE</th>
                            <th scope="col">TOTAL</th>
                        </tr>
                        </thead>
                        <tbody>

                        <tr v-for="item,index in items" :key='index'>
                            <td> {{ index+1 }}</td>
                            <td>
                                <b> {{ item.product_name }}</b>

                            </td>
                            <td>{{ item.product_quantity }}</td>
                            <td>{{ item.product_price }}</td>
                            <td>{{item.product_quantity * item.product_price}}</td>
                        </tr>





                        <tr>
                            <td colspan="3"></td>
                            <td><b>SUB Total</b></td>
                            <td><b>{{total_amount}}</b></td>
                        </tr>
                        <tr>
                            <td colspan="3"></td>
                            <td><b>TAX VAT 0%</b></td>
                            <td><b>00</b></td>
                        </tr>
                        <tr>
                            <td colspan="3"></td>
                            <td><b>Shipping Charge</b></td>
                            <td><b>00</b></td>
                        </tr>
                        <tr style="background-color: #E6E4E7; color: #0099D5;">
                            <td colspan="3"></td>
                            <td><b>GRAND TOTAL</b></td>
                            <td><b>{{total_amount}}(TAKA)</b></td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <h5 style="border-bottom:1px solid #d2d2d2;width: 50%;text-align: center;">Payment Method</h5>
                    <h6 style="text-align: center;width:50%;"><b>{{payment_method}}</b></h6>
                    <p></p>
                </td>
                <td align="right">
                    <h5 style="border-bottom:1px solid #d2d2d2;width: 50%;text-align: center;">{{customer_name}}</h5>
                    <h5 style="text-align: center;width:50%;">Customer Signature</h5>
                    <p></p>
                </td>
            </tr>
            <tr>
                <td>
                    <h5 style="margin-top: 30px;">Terms and Conditions</h5>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    </p>
                </td>
                <td align="right">
                    <h3 class="signature">Mr. Rahim Khan</h3>
                    <p>Account Manager</p>
                </td>
            </tr>
        </tabel>

        <button v-on:click="print" id="printPageButton">Print</button>
    </div>
</template>

<script>
    export default {
        mounted() {
            this.order_id =(window.location.pathname).substr(-1)
            this.formSubmit()

            const { Printd } = window.Printd

            this.d = new Printd()


            const { contentWindow } = this.d.getIFrame()



        },
        data() {
            return {
                cssText: '@media print {\n' +
                    '            body {-webkit-print-color-adjust: exact;}\n' +
                    'table.item_table tbody tr td, table.item_table thead tr th {\n' +
                    '            border: 1px solid #d3d3d3;\n' +
                    '            border-collapse: collapse;\n' +
                    '            text-align: center;\n' +
                    '        }' +
                    'table.item_table {\n' +
                    '            border-collapse: collapse;\n' +
                    '        }' +
                    '            #printPageButton {\n' +
                    '                display: none;\n' +
                    '            }\n' +
                    '        }',

                items:{},

                order_id:'',
                order_date:'',

                customer_id: '',
                customer_name: '',
                customer_address:'',
                customer_email: '',
                customer_mobile:'',

                payment_method:'',
                payment_status:'',

                total_amount:''

            };
        },
        methods: {
            formSubmit() {
                let currentObj = this;
                axios.post(window.location.origin+'/nasimlaravel/public/api/view/order', {
                    id: this.order_id
                })
                .then(function (response) {
                    currentObj.output = response.data;
                    // console.log(response.data);

                    currentObj.items = response.data.orderDetails;

                    currentObj.order_id = response.data.order.id;
                    currentObj.order_date = response.data.order.created_at;

                    currentObj.customer_id = response.data.customer.id;
                    currentObj.customer_name = response.data.shipping.full_name;
                    currentObj.customer_address = response.data.shipping.address;
                    currentObj.customer_email = response.data.shipping.email_address;
                    currentObj.customer_mobile = response.data.shipping.phone_number;

                    currentObj.payment_method = response.data.payment.payment_type;
                    currentObj.payment_status = response.data.payment.payment_status;

                    currentObj.total_amount = response.data.order.order_total;
                })
                .catch(function (error) {
                    currentObj.output = error;
                    console.log(currentObj.output);
                });
            },
            print() {

                this.d.print(this.$el, [this.cssText])
            }
        }
    }
</script>