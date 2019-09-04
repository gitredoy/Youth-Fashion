<template ref="mychildcomponent">
    <div class="container" id="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="invoice-box">
                    <table cellpadding="0" cellspacing="0">
                        <tr class="top">
                            <td colspan="2">
                                <table>
                                    <tr>
                                        <td class="title">
                                            <h1 class="title invo-title" >YOUTH FASHION</h1>
                                        </td>

                                        <td>
                                            Invoice #:: <span>{{ order_id }}</span><br>
                                            Created: <span>{{order_date}}</span><br>

                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                        <tr class="information">
                            <td colspan="2">
                                <table>
                                    <tr>
                                        <td>
                                            Road-08,Sector-14<br>
                                            Uttara-1230,Dhaka<br>
                                            Phone:48756926 <br>
                                            Email:YouthFashion@gmail.com
                                        </td>

                                        <td>
                                            To<br>
                                            {{ customer_name }}<br>
                                            {{ customer_mobile }}<br>
                                            {{ customer_email }}<br>
                                            {{ customer_address }}

                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                        <tr class="heading">
                            <td>
                                Payment Method
                            </td>





                            <td>
                                Payment Status
                            </td>
                        </tr>

                        <tr class="details">
                            <td>
                                <p>{{ payment_method }}</p>
                            </td>





                            <td>
                                <p>{{ payment_status }}</p>
                            </td>
                        </tr>

                        <tr class="heading">
                            <td>
                                S/N
                            </td>
                            <td class="text-left">
                                Item
                            </td>

                            <td>
                                Price
                            </td>
                        </tr>
                        <tr v-for="item,index in items" :key='index'>
                            <td>
                                {{ index+1 }}
                            </td>
                            <td class="text-left">
                                {{ item.product_name }}
                            </td>
                            <td>
                                {{ item.product_price }}
                            </td>
                        </tr>
                        <tr class="total">
                            <td></td>
                            <td>
                                Total: <span>{{ total_amount }}</span>
                            </td>
                        </tr>
                    </table>
                </div>
                <button v-on:click="print" id="printPageButton">Print</button>
            </div>
        </div>
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

            // contentWindow.addEventListener(
            //     'beforeprint', () => console.log('before print event!')
            // )
            // contentWindow.addEventListener(
            //     'afterprint', () => console.log('after print event!')
            // )

        },
        data() {
            return {
                cssText:'.invoice-box {\n' +
                    '    margin-top: 30px;\n' +
                    '    max-width: 800px;\n' +
                    '    padding: 30px;\n' +
                    '    font-size: 16px;\n' +
                    '    line-height: 24px;\n' +
                    '    font-family: \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif;\n' +
                    '    color: #555;\n' +
                    '}\n' +
                    '\n' +
                    '.page-wrapper{\n' +
                    '    background-color: #fff;\n' +
                    '}\n' +
                    '\n' +
                    '.invo-title{\n' +
                    '    color: #139ff7;\n' +
                    '    font-family: Courier;\n' +
                    '    font-size: 40px;\n' +
                    '    font-weight: bold;\n' +
                    '    letter-spacing: 8px;\n' +
                    '    background-color: bisque;\n' +
                    '    padding-left: 37px;\n' +
                    '}\n' +
                    '\n' +
                    '.invoice-box table {\n' +
                    '    width: 100%;\n' +
                    '    line-height: inherit;\n' +
                    '    text-align: left;\n' +
                    '}\n' +
                    '\n' +
                    '.invoice-box table td {\n' +
                    '    padding: 5px;\n' +
                    '    vertical-align: top;\n' +
                    '}\n' +
                    '\n' +
                    '.invoice-box table tr td:nth-child(2) {\n' +
                    '    text-align: right;\n' +
                    '}\n' +
                    '\n' +
                    '.invoice-box table tr.top table td {\n' +
                    '    padding-bottom: 20px;\n' +
                    '}\n' +
                    '\n' +
                    '.invoice-box table tr.top table td.title {\n' +
                    '    font-size: 45px;\n' +
                    '    line-height: 45px;\n' +
                    '    color: #333;\n' +
                    '}\n' +
                    '\n' +
                    '.invoice-box table tr.information table td {\n' +
                    '    padding-bottom: 40px;\n' +
                    '}\n' +
                    '\n' +
                    '.invoice-box table tr.heading td {\n' +
                    '    background: #eee;\n' +
                    '    border-bottom: 1px solid #ddd;\n' +
                    '}\n' +
                    '\n' +
                    '.invoice-box table tr.details td {\n' +
                    '    padding-bottom: 20px;\n' +
                    '}\n' +
                    '\n' +
                    '.invoice-box table tr.item td{\n' +
                    '    border-bottom: 1px solid #eee;\n' +
                    '}\n' +
                    '\n' +
                    '.invoice-box table tr.item.last td {\n' +
                    '    border-bottom: none;\n' +
                    '}\n' +
                    '\n' +
                    '.invoice-box table tr.total td:nth-child(2) {\n' +
                    '    border-top: 2px solid #eee;\n' +
                    '    font-weight: bold;\n' +
                    '}\n' +
                    '\n' +
                    '@media only screen and (max-width: 600px) {\n' +
                    '    .invoice-box table tr.top table td {\n' +
                    '        width: 100%;\n' +
                    '        display: block;\n' +
                    '        text-align: center;\n' +
                    '    }\n' +
                    '\n' +
                    '    .invoice-box table tr.information table td {\n' +
                    '        width: 100%;\n' +
                    '        display: block;\n' +
                    '        text-align: center;\n' +
                    '    }\n' +
                    '}\n' +
                    '\n' +
                    '/** RTL **/\n' +
                    '.rtl {\n' +
                    '    direction: rtl;\n' +
                    '    font-family: Tahoma, \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif;\n' +
                    '}\n' +
                    '\n' +
                    '.rtl table {\n' +
                    '    text-align: right;\n' +
                    '}\n' +
                    '\n' +
                    '.rtl table tr td:nth-child(2) {\n' +
                    '    text-align: left;\n' +
                    '}' +
                    '@media print {\n' +
                    '  #printPageButton {\n' +
                    '    display: none;\n' +
                    '  }\n' +
                    '}',

                items:{},

                order_id:'',
                order_date:'',

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
                axios.post(window.location.origin+'/nasimlaravel/public/api/get-invoice-data', {
                    id: this.order_id
                })
                .then(function (response) {
                    currentObj.output = response.data;
                    // console.log(response.data);

                    currentObj.items = response.data.orderDetails;

                    currentObj.order_id = response.data.order.id;
                    currentObj.order_date = response.data.order.created_at;

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