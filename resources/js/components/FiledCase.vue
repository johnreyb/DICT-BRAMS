<template>
  <div>
    <v-dialog v-model="dialog" persistent max-width="800px">
      <v-form>
        <v-card>
          <v-card-title>
            <span class="headline">ADD</span>
          </v-card-title>
          <v-card-text>
            <v-container grid-list-md>
              <v-layout wrap>
                <v-flex xs12 sm6 md4>
                  <v-text-field v-model="form.ctc_no" label="Community Tax Certificate Number"></v-text-field>
                </v-flex>
                <v-flex xs12 sm6 md4>
                  <v-text-field v-model="form.purpose_of_clearance" label="Purpose of clearance"></v-text-field>
                </v-flex>
                <v-flex xs12 sm6 md4>
                  <v-text-field v-model="form.ctc_issued_at" label="Issued at"></v-text-field>
                </v-flex>
                <v-flex xs12 sm6 md4>
                  <v-text-field v-model="form.ctc_issued_on" label="Issued on"></v-text-field>
                </v-flex>
                <v-flex xs12 sm6 md4>
                  <v-text-field v-model="form.official_receipt_no" label="Official Receipt Number"></v-text-field>
                </v-flex>
              </v-layout>
            </v-container>
          </v-card-text>
          <v-card-actions>
            <v-spacer></v-spacer>
            <v-btn color="blue darken-1" text @click="dialog=false">Okay</v-btn>
          </v-card-actions>
        </v-card>
      </v-form>
    </v-dialog>
    <v-app-bar id="navbar" dense flat app>
      <v-toolbar-title>
        <span class="hidden-sm-and-down">Barangay Clearance</span>
      </v-toolbar-title>
      <v-spacer></v-spacer>
      <v-autocomplete
        v-model="select"
        :items="items"
        :loading="isLoading"
        :search-input.sync="search"
        autofocus
        solo
        flat
        hide-details
        hide-selected
        item-text="first_name"
        item-value="API"
        label="Inhabitants"
        placeholder="Start typing to Search"
        return-object
      ></v-autocomplete>
      <v-tooltip bottom>
        <template v-slot:activator="{ on }">
          <v-btn text icon color="primary" v-on="on" @click="dialog=true">
            <v-icon color="grey darken-2">mdi-file-document-edit</v-icon>
          </v-btn>
        </template>
        <span>Fill-up form</span>
      </v-tooltip>
      <v-tooltip bottom>
        <template v-slot:activator="{ on }">
          <v-btn text icon color="primary" v-on="on">
            <v-icon color="grey darken-2">mdi-printer</v-icon>
          </v-btn>
        </template>
        <span>Print</span>
      </v-tooltip>
      <v-tooltip bottom>
        <template v-slot:activator="{ on }">
          <v-btn text icon color="primary" v-on:click='pdf()'>
            <v-icon color="grey darken-2">mdi-file-export</v-icon>
          </v-btn>
        </template>
        <span>Export</span>
      </v-tooltip>
      <v-tooltip bottom>
        <template v-slot:activator="{ on }">
          <v-btn text icon color="primary" v-on="on">
            <v-icon color="grey darken-2">mdi-refresh</v-icon>
          </v-btn>
        </template>
        <span>Refresh</span>
      </v-tooltip>
    </v-app-bar>
    <v-container grid-list-md text-xs-center id="printForm">
      <v-layout row wrap>
        <v-flex xs4>
          <v-img src="/img/baguio.png" alt="Logo" contain height="100"></v-img>
        </v-flex>
        <v-flex xs4 class="green--text title">
          <p class="mb-0">Republic of the Philippines</p>
<<<<<<< HEAD
          <p class="mb-0">BARANGAY LOAKAN</p>
=======
          <p class="mb-0">BARANGAY AMBIONG</p>
>>>>>>> c23e70b3992b1b81ab0a08ad3ead82358b36d6fe
          <p>Aurora Hill, Baguio</p>
        </v-flex>
        <v-flex xs4>
          <v-img src="/img/profile/profile1.png" alt="Logo" contain height="100"></v-img>
        </v-flex>
      </v-layout>
      <v-layout row wrap>
        <v-flex xs12 class="subtitle-1 font-weight-bold">
          <p class="mb-0">Office of the Punong Barangay</p>
          <p>Barangay Clearance</p>
        </v-flex>
      </v-layout>
      <v-layout row wrap>
        <v-flex xs4 class="form-border-right">
          <p class="mb-0">RANDY P. GATI</p>
          <p>Punong Barangay</p>
          <p class="mb-0">BRIAN C. ANTON</p>
          <p>Barangay Kagawad</p>
          <p class="mb-0">ARTHUR T. WILLY</p>
          <p>Barangay Kagawad</p>
          <p class="mb-0">MARTN G. CONTIC</p>
          <p>Barangay Kagawad</p>
          <p class="mb-0">EMILY R. BALLARES</p>
          <p>Barangay Kagawad</p>
          <p class="mb-0">RUDY D. AMISTAD</p>
          <p>Barangay Kagawad</p>
          <p class="mb-0">VICENTE J. ZAPANTA</p>
          <p>Barangay Kagawad</p>
          <p class="mb-0">MODESTO P. COLUMBRES</p>
          <p>Barangay Kagawad</p>
          <p class="mb-0">CYNTHIA G. AMISTAD</p>
          <p>Barangay Secretary</p>
          <p class="mb-0">RONALD C. GOMEZ</p>
          <p>Barangay Treasurer</p>
        </v-flex>
        <v-flex xs8 text-xs-left class="pl-3">
          <p>TO WHOM IT MAY CONCERN:</p>
          <p>
            This is to certify that {{select.first_name}} {{select.middle_name}} {{select.last_name}}, years old, {{select.citizenship}} citizen, a native of {{select.barangay}}, and presently residing at
            {{select.barangay}} and whose signature appears hereunder, has no pending adverse case and deragatory records filed
            against,per available records on file with this office as of the date of issuance thereof.
          </p>
          <p>Issued {{form.purpose_of_clearance}} purposes.</p>
          <p class="mb-0">________________________</p>
          <p class="mb-5">Signature Over Printed Name</p>
          <p class="mb-0">Community Tax Certificate Number: {{form.ctc_no}}</p>
          <p class="mb-0">Issued On: {{form.ctc_issued_on}}</p>
          <p class="mb-0">Issued At: {{form.ctc_issued_at}}</p>
          <p class="mb-0">Official Receipt Number: {{form.official_receipt_no}}</p>
          <div class="text-xs-right text-xs-center">
            <p class="mb-5">CERTIFIED AND ISSUED BY:</p>
            <p class="mb-0 mr-5">RANDY P. GATI</p>
            <p class="mb-5 mr-5">Punong Barangay</p>
          </div>
          <p>Note: Not valid without Barangay Seal</p>
        </v-flex>
      </v-layout>
    </v-container>
  </div>
</template>

<script>
import jsPDF from 'jspdf'
import html2canvas from 'html2canvas';
export default {
  data: () => ({
    inhabitants: [],
    dialog: false,
    form: new Form({
      control_no: "",
      ctc_no: "",
      purpose_of_clearance: "",
      date_issued: "",
      official_receipt_no: "",
      ctc_issued_on: "",
      ctc_issued_at: "",
      inhabitant_id: ""
    }),
    search: null,
    select: {},
    isLoading: false
  }),
  computed: {
    items() {
      return this.inhabitants.map(entry => {
        const first_name =
          entry.first_name.length > this.descriptionLimit
            ? entry.first_name.slice(0, this.descriptionLimit) + "..."
            : entry.first_name;
        return Object.assign({}, entry, {
          first_name
        });
      });
    }
  },

  watch: {
    search(val) {
      if (this.items.length > 0) return;
      if (this.isLoading) return;
      this.isLoading = true;
      axios
        .get("api/inhabitant")
        .then(response => {
          this.inhabitants = response.data;
        })
        .catch(err => {
          console.log(err);
        })
        .finally(() => (this.isLoading = false));
    }
  },
  methods:{
    pdf(){
      html2canvas(document.getElementById('printForm')).then(canvas => {
        let pdf = new jsPDF('p', 'mm', 'letter');
        pdf.addImage(canvas.toDataURL('image/png'), 'PNG', 0, 0, 205, 248);
        pdf.save("FiledCase.pdf");
      });
    }
  }
};
</script>