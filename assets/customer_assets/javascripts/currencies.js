var Currency = {
  rates: {"USD":1.0,"EUR":1.06261,"GBP":1.24323,"CAD":0.764007,"ARS":0.0647269,"AUD":0.766737,"BRL":0.322238,"CLP":0.00155256,"CNY":0.14585,"CYP":0.397899,"CZK":0.0393245,"DKK":0.142947,"EEK":0.0706676,"HKD":0.128848,"HUF":0.00344747,"ISK":0.00904575,"INR":0.0149086,"JMD":0.00785608,"JPY":0.00885697,"LVL":1.57329,"LTL":0.320236,"MTL":0.293496,"MXN":0.0488945,"NZD":0.718081,"NOK":0.119885,"PLN":0.245558,"SGD":0.704991,"SKK":21.5517,"SIT":175.439,"ZAR":0.0764909,"KRW":0.000869503,"SEK":0.112298,"CHF":0.998043,"TWD":0.0323468,"UYU":0.0353357,"MYR":0.224542,"BSD":1.0,"CRC":0.00180245,"RON":0.234878,"PHP":0.01998,"AED":0.272279,"VEB":0.000100251,"IDR":7.48672e-05,"TRY":0.275346,"THB":0.02857,"TTD":0.149265,"ILS":0.270374,"SYP":0.00466505,"XCD":0.37037,"COP":0.000346741,"RUB":0.0171622,"HRK":0.142835,"KZT":0.00314021,"TZS":0.000449035,"XPT":1003.0,"SAR":0.266667,"NIO":0.0337211,"LAK":0.0001221,"OMR":2.59808,"AMD":0.0020547,"CDF":0.000796813,"KPW":0.00764921,"SPL":6.0,"KES":0.00967586,"ZWD":0.00276319,"KHR":0.000250564,"MVR":0.0652741,"GTQ":0.135291,"BZD":0.500551,"BYR":5.34759e-05,"LYD":0.701902,"DZD":0.00909852,"BIF":0.000593197,"GIP":1.24323,"BOB":0.14556,"XOF":0.00161994,"STD":4.33179e-05,"NGN":0.00315459,"PGK":0.314961,"ERN":0.0654879,"MWK":0.00139499,"CUP":0.0377358,"GMD":0.0224568,"CVE":0.00962363,"BTN":0.0149086,"XAF":0.00161994,"UGX":0.000279799,"MAD":0.0992682,"MNT":0.000404694,"LSL":0.0764909,"XAG":18.0198,"TOP":0.4437,"SHP":1.24323,"RSD":0.00856607,"HTG":0.01467,"MGA":0.000320513,"MZN":0.0141965,"FKP":1.24323,"BWP":0.095977,"HNL":0.0425641,"PYG":0.000174004,"JEP":1.24323,"EGP":0.0625993,"LBP":0.000664894,"ANG":0.561798,"WST":0.3933,"TVD":0.766737,"GYD":0.00484285,"GGP":1.24323,"NPR":0.00932662,"KMF":0.00215992,"IRR":3.08737e-05,"XPD":777.519,"SRD":0.13369,"TMM":5.71429e-05,"SZL":0.0764909,"MOP":0.125095,"BMD":1.0,"XPF":0.00890469,"ETB":0.0438404,"JOD":1.41343,"MDL":0.0503398,"MRO":0.0028169,"YER":0.0040008,"BAM":0.543305,"AWG":0.558659,"PEN":0.306984,"VEF":0.100251,"SLL":0.00013519,"KYD":1.20759,"AOA":0.00603307,"TND":0.437924,"TJS":0.126,"SCR":0.0766342,"LKR":0.00662077,"DJF":0.00562082,"GNF":0.000107239,"VUV":0.0094402,"SDG":0.156257,"IMP":1.24323,"GEL":0.378788,"FJD":0.484226,"DOP":0.0214041,"XDR":1.35336,"MUR":0.0283126,"MMK":0.000731529,"LRD":0.010582,"BBD":0.5,"ZMK":0.000102881,"XAU":1236.36,"VND":4.39387e-05,"UAH":0.0370233,"TMT":0.285714,"IQD":0.00084674,"BGN":0.542064,"KGS":0.0144705,"RWF":0.00122717,"BHD":2.65816,"UZS":0.0003003,"PKR":0.00955566,"MKD":0.017331,"AFN":0.0150263,"NAD":0.0764909,"BDT":0.012486,"AZN":0.560968,"SOS":0.0017331,"QAR":0.27465,"PAB":1.0,"CUC":1.0,"SVC":0.114286,"SBD":0.127047,"ALL":0.00784142,"BND":0.704991,"KWD":3.27869,"GHS":0.221312,"ZMW":0.102881,"XBT":1051.13,"NTD":0.0337206,"BYN":0.534759},
  convert: function(amount, from, to) {
    return (amount * this.rates[from]) / this.rates[to];
  }
};