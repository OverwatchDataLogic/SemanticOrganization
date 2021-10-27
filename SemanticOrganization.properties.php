<?php

use SMW\PropertyRegistry;

/**
 * Properties for the Semantic Organization Extension
 */
class SemanticOrganizationProperties {
	static $properties = [
		"account" => [ "id" => "AC","fields" => ["account-number" => [ "id" => "NU","type" => "num" ],"account-name" => [ "id" => "NA","type" => "txt" ], ] ],
		"account-special" => [ "id" => "AS","fields" => [ ] ],
		"agenda" => [ "id" => "AG","fields" => ["meeting" => [ "id" => "ME","type" => "wpg" ],"priority" => [ "id" => "PY","type" => "txt" ],"proposal" => [ "id" => "PR","type" => "txt" ],"title" => [ "id" => "TT","type" => "txt" ],"project" => [ "id" => "PJ","type" => "wpg" ],"tag" => [ "id" => "TA","type" => "txt" ],"person" => [ "id" => "PE","type" => "wpg" ],"start" => [ "id" => "ST","type" => "num" ],"type" => [ "id" => "TY","type" => "txt" ],"end" => [ "id" => "ET","type" => "num" ],"time" => [ "id" => "TI","type" => "num" ],"time-real" => [ "id" => "TR","type" => "num" ],"description" => [ "id" => "DE","type" => "txt" ], ] ],
		"bmc" => [ "id" => "BMC","fields" => ["title" => [ "id" => "TI","type" => "txt" ],"key-partners" => [ "id" => "KP","type" => "txt" ],"revenue-streams" => [ "id" => "RS","type" => "txt" ],"value-propositions" => [ "id" => "VP","type" => "txt" ],"cost-structure" => [ "id" => "CO","type" => "txt" ],"customer-relationships" => [ "id" => "CR","type" => "txt" ],"current" => [ "id" => "CU","type" => "boo" ],"project" => [ "id" => "PR","type" => "wpg" ],"channels" => [ "id" => "CH","type" => "txt" ],"key-resources" => [ "id" => "KR","type" => "txt" ],"description" => [ "id" => "DE","type" => "txt" ],"key-activities" => [ "id" => "KA","type" => "txt" ], ] ],
		"bmc-customer-segment" => [ "id" => "BCS","fields" => ["institutions" => [ "id" => "IN","type" => "wpg" ],"name" => [ "id" => "NA","type" => "txt" ],"description" => [ "id" => "DE","type" => "txt" ],"people" => [ "id" => "PE","type" => "wpg" ],"target-group" => [ "id" => "TG","type" => "wpg" ],"bmc" => [ "id" => "BMC","type" => "wpg" ], ] ],
		"contact" => [ "id" => "CO","fields" => ["participant" => [ "id" => "PA","type" => "wpg" ],"details" => [ "id" => "DE","type" => "txt" ],"contact" => [ "id" => "CO","type" => "wpg" ],"date" => [ "id" => "DA","type" => "dat" ],"type" => [ "id" => "TY","type" => "txt" ],"ref" => [ "id" => "RE","type" => "wpg" ],"location" => [ "id" => "LO","type" => "txt" ],"time" => [ "id" => "TI","type" => "txt" ],"subject" => [ "id" => "SU","type" => "txt" ], ] ],
		"delivery-model" => [ "id" => "DM","fields" => ["type" => [ "id" => "TY","type" => "txt" ],"stakeholder" => [ "id" => "ST","type" => "wpg" ],"note" => [ "id" => "NO","type" => "txt" ],"how" => [ "id" => "HO","type" => "txt" ],"pro" => [ "id" => "PR","type" => "txt" ],"contra" => [ "id" => "CO","type" => "txt" ],"milestone" => [ "id" => "MI","type" => "wpg" ], ] ],
		"department" => [ "id" => "DE","fields" => ["name" => [ "id" => "NA","type" => "txt" ],"description" => [ "id" => "DE","type" => "txt" ], ] ],
		"gdpr-affected" => [ "id" => "GA","fields" => ["name" => [ "id" => "NA","type" => "txt" ],"processing" => [ "id" => "PR","type" => "wpg" ], ] ],
		"expense" => [ "id" => "EX","fields" => ["expense-report" => [ "id" => "ER","type" => "wpg" ],"account" => [ "id" => "AC","type" => "wpg" ],"date" => [ "id" => "DA","type" => "dat" ],"type" => [ "id" => "TY","type" => "txt" ],"project" => [ "id" => "PR","type" => "wpg" ],"vat" => [ "id" => "VA","type" => "num" ],"description" => [ "id" => "DE","type" => "txt" ],"amount-gross" => [ "id" => "AG","type" => "num" ],"amount-net" => [ "id" => "AN","type" => "num" ], ] ],
		"expense-report" => [ "id" => "ER","fields" => ["person" => [ "id" => "PE","type" => "wpg" ],"date" => [ "id" => "DA","type" => "dat" ],"month" => [ "id" => "MO","type" => "num" ],"quarter" => [ "id" => "QU","type" => "num" ],"payment-date" => [ "id" => "PD","type" => "dat" ],"year" => [ "id" => "YE","type" => "num" ], ] ],
		"file" => [ "id" => "FI","fields" => ["ref" => [ "id" => "RE","type" => "wpg" ],"file" => [ "id" => "FI","type" => "wpg" ],"link-text" => [ "id" => "LT","type" => "txt" ],"description" => [ "id" => "DE","type" => "txt" ],"tag" => [ "id" => "TA","type" => "txt" ], ] ],
		"gdpr-category" => [ "id" => "GC","fields" => ["name" => [ "id" => "NA","type" => "txt" ],"affected" => [ "id" => "AF","type" => "wpg" ],"sensitive" => [ "id" => "SE","type" => "boo" ],"prosecution" => [ "id" => "PR","type" => "boo" ],"erase-time" => [ "id" => "ET","type" => "txt" ], ] ],
		"gdpr-processing" => [ "id" => "GP","fields" => ["name" => [ "id" => "NA","type" => "txt" ],"documents" => [ "id" => "DO","type" => "txt" ],"purpose" => [ "id" => "PU","type" => "txt" ],"measures" => [ "id" => "ME","type" => "txt" ],"legal-basis" => [ "id" => "LB","type" => "txt" ],"access" => [ "id" => "AC","type" => "txt" ],"application" => [ "id" => "AP","type" => "txt" ],"department" => [ "id" => "DP","type" => "wpg" ],"responsible" => [ "id" => "RE","type" => "wpg" ], ] ],
		"gdpr-recipient" => [ "id" => "GR","fields" => ["name" => [ "id" => "NA","type" => "txt" ],"category" => [ "id" => "CA","type" => "wpg" ],"third-country" => [ "id" => "TC","type" => "txt" ],"international-organization" => [ "id" => "IO","type" => "txt" ], ] ],
		"generator" => [ "id" => "GE","fields" => ["template-name" => [ "id" => "TN","type" => "txt" ],"template-id" => [ "id" => "TI","type" => "txt" ],"page-name" => [ "id" => "PN","type" => "" ], ] ],
		"generator-field" => [ "id" => "GF","fields" => ["template" => [ "id" => "TE","type" => "wpg" ],"prefix" => [ "id" => "PR","type" => "txt" ],"id" => [ "id" => "ID","type" => "txt" ],"suffix" => [ "id" => "SU","type" => "txt" ],"property-id" => [ "id" => "PID","type" => "txt" ],"fields" => [ "id" => "FI","type" => "txt" ],"name" => [ "id" => "NA","type" => "txt" ],"help" => [ "id" => "HE","type" => "txt" ],"parameters" => [ "id" => "PA","type" => "txt" ],"type" => [ "id" => "TY","type" => "txt" ], ] ],
		"group" => [ "id" => "G","fields" => ["name" => [ "id" => "NA","type" => "txt" ],"description" => [ "id" => "DE","type" => "txt" ],"permanent" => [ "id" => "PM","type" => "boo" ],"active" => [ "id" => "AC","type" => "boo" ],"host" => [ "id" => "HO","type" => "wpg" ],"co-host" => [ "id" => "CO","type" => "wpg" ], ] ],
		"group-member" => [ "id" => "GM","fields" => ["group" => [ "id" => "GR","type" => "wpg" ],"member" => [ "id" => "ME","type" => "wpg" ],"start-date" => [ "id" => "SD","type" => "dat" ],"end-date" => [ "id" => "ED","type" => "dat" ],"open-end" => [ "id" => "OE","type" => "boo" ], ] ],
		"hypothesis" => [ "id" => "HY","fields" => ["description" => [ "id" => "DE","type" => "txt" ],"plausibility" => [ "id" => "PL","type" => "num" ],"evidence" => [ "id" => "EV","type" => "txt" ],"validation" => [ "id" => "VA","type" => "txt" ],"system" => [ "id" => "SY","type" => "wpg" ],"name" => [ "id" => "NA","type" => "txt" ], ] ],
		"iooi" => [ "id" => "IO","fields" => ["title" => [ "id" => "TI","type" => "txt" ],"impact" => [ "id" => "IM","type" => "txt" ],"description" => [ "id" => "DE","type" => "txt" ],"input" => [ "id" => "IP","type" => "txt" ],"activities" => [ "id" => "AC","type" => "txt" ],"output" => [ "id" => "OP","type" => "txt" ],"outcome" => [ "id" => "OC","type" => "txt" ], ] ],
		"invoice" => [ "id" => "IN","fields" => ["description" => [ "id" => "DS","type" => "txt" ],"template-name" => [ "id" => "TN","type" => "txt" ],"date" => [ "id" => "DT","type" => "dat" ],"reminder-2-date" => [ "id" => "R2","type" => "dat" ],"department" => [ "id" => "DE","type" => "wpg" ],"amount-gross" => [ "id" => "AG","type" => "num" ],"year" => [ "id" => "YE","type" => "num" ],"project" => [ "id" => "PJ","type" => "wpg" ],"amount-net" => [ "id" => "AN","type" => "num" ],"payed" => [ "id" => "PA","type" => "boo" ],"recipient" => [ "id" => "RE","type" => "txt" ],"storno" => [ "id" => "ST","type" => "boo" ],"due-date" => [ "id" => "DD","type" => "dat" ],"period" => [ "id" => "PE","type" => "txt" ],"issuer" => [ "id" => "IS","type" => "wpg" ],"reminder-1-date" => [ "id" => "R1","type" => "dat" ],"payment-date" => [ "id" => "PD","type" => "dat" ],"outro" => [ "id" => "OU","type" => "txt" ],"number" => [ "id" => "NU","type" => "txt" ],"collection-date" => [ "id" => "CD","type" => "dat" ], ] ],
		"invoice-item" => [ "id" => "II","fields" => ["amount-gross" => [ "id" => "AG","type" => "num" ],"vat-rate" => [ "id" => "VR","type" => "num" ],"amount-vat" => [ "id" => "AV","type" => "num" ],"invoice" => [ "id" => "IN","type" => "wpg" ],"description" => [ "id" => "DE","type" => "txt" ],"amount-net" => [ "id" => "AN","type" => "num" ], ] ],
		"knowledge" => [ "id" => "KN","fields" => ["summary" => [ "id" => "SU","type" => "txt" ],"role" => [ "id" => "RO","type" => "wpg" ],"tag" => [ "id" => "TA","type" => "txt" ],"up-to-date-date" => [ "id" => "UD","type" => "dat" ],"checked" => [ "id" => "CH","type" => "boo" ],"title" => [ "id" => "TI","type" => "txt" ], ] ],
		"liquidity-planning" => [ "id" => "FPL","fields" => ["end-date" => [ "id" => "ED","type" => "dat" ],"project" => [ "id" => "PR","type" => "wpg" ],"note" => [ "id" => "NO","type" => "txt" ],"title" => [ "id" => "TI","type" => "txt" ],"date" => [ "id" => "DA","type" => "dat" ],"frequency" => [ "id" => "FR","type" => "txt" ],"status" => [ "id" => "ST","type" => "num" ],"amount" => [ "id" => "AM","type" => "num" ], ] ],
		"manual" => [ "id" => "MA","fields" => ["summary" => [ "id" => "SU","type" => "txt" ],"role" => [ "id" => "RO","type" => "wpg" ],"tag" => [ "id" => "TA","type" => "txt" ],"up-to-date-date" => [ "id" => "UD","type" => "dat" ],"checked" => [ "id" => "CH","type" => "boo" ],"title" => [ "id" => "TI","type" => "txt" ], ] ],
		"meeting" => [ "id" => "M","fields" => ["group" => [ "id" => "GR","type" => "wpg" ],"event-type" => [ "id" => "EVTY","type" => "txt" ],"meeting-type" => [ "id" => "MTY","type" => "txt" ],"vote-counter" => [ "id" => "VC","type" => "wpg" ],"participant-board" => [ "id" => "PB","type" => "wpg" ],"start-time" => [ "id" => "ST","type" => "txt" ],"start-date" => [ "id" => "SD","type" => "dat" ],"excused" => [ "id" => "EX","type" => "wpg" ],"end-date" => [ "id" => "ED","type" => "dat" ],"chair" => [ "id" => "CH","type" => "wpg" ],"project" => [ "id" => "PR","type" => "wpg" ],"end-datetime" => [ "id" => "EDT","type" => "dat" ],"secretary" => [ "id" => "SE","type" => "wpg" ],"time" => [ "id" => "TI","type" => "txt" ],"participant" => [ "id" => "PA","type" => "wpg" ],"location" => [ "id" => "LO","type" => "txt" ],"signer" => [ "id" => "SI","type" => "wpg" ],"department" => [ "id" => "DE","type" => "wpg" ],"end-time" => [ "id" => "ET","type" => "txt" ],"event-title" => [ "id" => "EVTI","type" => "txt" ],"date" => [ "id" => "DT","type" => "dat" ],"type" => [ "id" => "TY","type" => "txt" ],"guest" => [ "id" => "GU","type" => "wpg" ],"contact" => [ "id" => "CO","type" => "wpg" ],"start-datetime" => [ "id" => "SDT","type" => "dat" ],"moderator" => [ "id" => "MO","type" => "wpg" ],"number" => [ "id" => "NU","type" => "num" ],"overview" => [ "id" => "OV","type" => "txt" ], ] ],
		"meeting-department" => [ "id" => "","fields" => [ ] ],
		"meeting-group" => [ "id" => "","fields" => [ ] ],
		"meeting-project" => [ "id" => "","fields" => [ ] ],
		"membership" => [ "id" => "MS","fields" => ["member" => [ "id" => "ME","type" => "wpg" ],"payed" => [ "id" => "PY","type" => "boo" ],"shares" => [ "id" => "SH","type" => "num" ],"date" => [ "id" => "DT","type" => "dat" ],"type" => [ "id" => "TY","type" => "txt" ],"due-date" => [ "id" => "DD","type" => "dat" ],"pay-date" => [ "id" => "PD","type" => "dat" ], ] ],
		"membership-payment" => [ "id" => "MP","fields" => ["ref" => [ "id" => "RE","type" => "wpg" ],"date" => [ "id" => "DT","type" => "dat" ],"member" => [ "id" => "ME","type" => "wpg" ],"amount" => [ "id" => "AM","type" => "num" ], ] ],
		"milestone" => [ "id" => "MI","fields" => ["number" => [ "id" => "NU","type" => "num" ],"plot" => [ "id" => "PL","type" => "wpg" ],"description" => [ "id" => "DE","type" => "txt" ],"name" => [ "id" => "NA","type" => "txt" ],"project" => [ "id" => "PR","type" => "wpg" ], ] ],
		"person" => [ "id" => "P","fields" => ["workphone" => [ "id" => "WPH","type" => "tel" ],"personnel-end" => [ "id" => "PEE","type" => "dat" ],"workcountry" => [ "id" => "WCO","type" => "txt" ],"name" => [ "id" => "NA","type" => "txt" ],"membership-start" => [ "id" => "MES","type" => "dat" ],"ref" => [ "id" => "RF","type" => "wpg" ],"birthday" => [ "id" => "BD","type" => "dat" ],"profession" => [ "id" => "PR","type" => "txt" ],"workaddress" => [ "id" => "WAD","type" => "txt" ],"ssn" => [ "id" => "SS","type" => "txt" ],"email" => [ "id" => "EM","type" => "ema" ],"membership-end" => [ "id" => "MEE","type" => "dat" ],"prefix" => [ "id" => "PF","type" => "txt" ],"birthplace" => [ "id" => "BP","type" => "txt" ],"tax-number" => [ "id" => "TN","type" => "txt" ],"homepage" => [ "id" => "HP","type" => "uri" ],"legal-form" => [ "id" => "LF","type" => "txt" ],"worklocality" => [ "id" => "WLO","type" => "txt" ],"personnel" => [ "id" => "PE","type" => "boo" ],"acronym" => [ "id" => "AC","type" => "txt" ],"firstname" => [ "id" => "FN","type" => "txt" ],"iban" => [ "id" => "IB","type" => "txt" ],"organization" => [ "id" => "OR","type" => "txt" ],"legal-registry" => [ "id" => "LR","type" => "txt" ],"workstreet" => [ "id" => "WST","type" => "txt" ],"personnel-number" => [ "id" => "PEN","type" => "num" ],"topic" => [ "id" => "TO","type" => "wpg" ],"lastname" => [ "id" => "LN","type" => "txt" ],"membership" => [ "id" => "ME","type" => "boo" ],"note" => [ "id" => "NT","type" => "txt" ],"tag" => [ "id" => "TA","type" => "txt" ],"workpostalcode" => [ "id" => "WPC","type" => "txt" ],"personnel-start" => [ "id" => "PES","type" => "dat" ],"category" => [ "id" => "CA","type" => "txt" ],"suffix" => [ "id" => "SF","type" => "txt" ],"membership-number" => [ "id" => "MEN","type" => "num" ],"gender" => [ "id" => "GD","type" => "txt" ],"vat-number" => [ "id" => "VAT","type" => "txt" ], ] ],
		"person-contact" => [ "id" => "","fields" => [ ] ],
		"person-legal" => [ "id" => "","fields" => [ ] ],
		"person-ref" => [ "id" => "PR","fields" => ["role" => [ "id" => "RO","type" => "txt" ],"tag" => [ "id" => "TG","type" => "txt" ],"ref" => [ "id" => "RF","type" => "wpg" ],"formerly" => [ "id" => "FO","type" => "boo" ],"name" => [ "id" => "NA","type" => "wpg" ], ] ],
		"person-user" => [ "id" => "","fields" => [ ] ],
		"plot" => [ "id" => "PL","fields" => ["number" => [ "id" => "NU","type" => "num" ],"prio-alignment" => [ "id" => "PAL","type" => "num" ],"name" => [ "id" => "NA","type" => "txt" ],"prio-total" => [ "id" => "PTO","type" => "num" ],"description" => [ "id" => "DE","type" => "txt" ],"scj" => [ "id" => "SCJ","type" => "wpg" ],"prio-urgency" => [ "id" => "PUR","type" => "num" ],"prio-unaddressed" => [ "id" => "PUA","type" => "num" ], ] ],
		"process" => [ "id" => "PS","fields" => ["title" => [ "id" => "TI","type" => "txt" ],"description" => [ "id" => "DE","type" => "txt" ],"owner" => [ "id" => "OW","type" => "wpg" ],"visualization" => [ "id" => "VI","type" => "wpg" ], ] ],
		"project" => [ "id" => "PJ","fields" => ["phase" => [ "id" => "PH","type" => "txt" ],"topic" => [ "id" => "TP","type" => "wpg" ],"homepage" => [ "id" => "HO","type" => "uri" ],"closed" => [ "id" => "CL","type" => "boo" ],"start" => [ "id" => "ST","type" => "dat" ],"strategic-objective" => [ "id" => "SO","type" => "txt" ],"contact-person" => [ "id" => "CP","type" => "wpg" ],"outlook" => [ "id" => "OL","type" => "txt" ],"partners" => [ "id" => "PA","type" => "" ],"team-internal" => [ "id" => "TI","type" => "wpg" ],"type" => [ "id" => "TY","type" => "txt" ],"milestone" => [ "id" => "MI","type" => "wpg" ],"toggl-id" => [ "id" => "TO","type" => "num" ],"status" => [ "id" => "SU","type" => "txt" ],"target-group" => [ "id" => "TG","type" => "wpg" ],"description" => [ "id" => "DE","type" => "txt" ],"budget" => [ "id" => "BU","type" => "num" ],"tag" => [ "id" => "TA","type" => "txt" ],"title" => [ "id" => "TT","type" => "txt" ],"short-title" => [ "id" => "SH","type" => "txt" ],"openproject-id" => [ "id" => "OP","type" => "num" ],"team-external" => [ "id" => "TE","type" => "wpg" ],"department" => [ "id" => "DP","type" => "wpg" ],"end" => [ "id" => "EN","type" => "dat" ], ] ],
		"project-grant" => [ "id" => "PG","fields" => ["project" => [ "id" => "PR","type" => "wpg" ],"note" => [ "id" => "NO","type" => "txt" ],"amount" => [ "id" => "AM","type" => "num" ],"responsible" => [ "id" => "RE","type" => "wpg" ],"grantor" => [ "id" => "GR","type" => "wpg" ],"de-minimis" => [ "id" => "DM","type" => "boo" ],"acceptance-date" => [ "id" => "AD","type" => "dat" ],"title" => [ "id" => "TI","type" => "txt" ], ] ],
		"project-partner" => [ "id" => "PP","fields" => ["lead-partner" => [ "id" => "LP","type" => "boo" ],"project" => [ "id" => "PR","type" => "wpg" ],"role" => [ "id" => "RO","type" => "txt" ],"partner" => [ "id" => "PA","type" => "wpg" ], ] ],
		"project-subpage" => [ "id" => "PS","fields" => ["project" => [ "id" => "PR","type" => "wpg" ],"subpage" => [ "id" => "SU","type" => "txt" ],"description" => [ "id" => "DE","type" => "txt" ], ] ],
		"project-team" => [ "id" => "PT","fields" => ["project" => [ "id" => "PR","type" => "wpg" ],"team" => [ "id" => "TM","type" => "wpg" ],"role" => [ "id" => "RO","type" => "txt" ],"main-responsible" => [ "id" => "MR","type" => "boo" ],"start-date" => [ "id" => "SD","type" => "dat" ],"end-date" => [ "id" => "ED","type" => "dat" ],"team-internal" => [ "id" => "TI","type" => "wpg" ],"team-external" => [ "id" => "TE","type" => "wpg" ], ] ],
		"project-update" => [ "id" => "PU","fields" => ["project" => [ "id" => "PR","type" => "wpg" ],"date" => [ "id" => "DA","type" => "dat" ],"author" => [ "id" => "AU","type" => "wpg" ],"update" => [ "id" => "UP","type" => "txt" ], ] ],
		"role" => [ "id" => "RO","fields" => ["name" => [ "id" => "NA","type" => "txt" ],"group" => [ "id" => "GR","type" => "wpg" ],"holder" => [ "id" => "HO","type" => "wpg" ],"active" => [ "id" => "AC","type" => "boo" ],"active-reason" => [ "id" => "AR","type" => "txt" ], ] ],
		"role-holder" => [ "id" => "RH","fields" => ["role" => [ "id" => "RO","type" => "wpg" ],"holder" => [ "id" => "HO","type" => "wpg" ],"start-date" => [ "id" => "SD","type" => "dat" ],"end-date" => [ "id" => "ED","type" => "dat" ],"main-responsible" => [ "id" => "MR","type" => "boo" ], ] ],
		"role-metric" => [ "id" => "RM","fields" => ["active" => [ "id" => "AC","type" => "boo" ],"responsible" => [ "id" => "RE","type" => "wpg" ],"role" => [ "id" => "RO","type" => "wpg" ],"frequency" => [ "id" => "FR","type" => "txt" ],"name" => [ "id" => "NA","type" => "txt" ],"description" => [ "id" => "DE","type" => "txt" ], ] ],
		"role-metric-measurement" => [ "id" => "MM","fields" => ["note" => [ "id" => "NO","type" => "txt" ],"metric" => [ "id" => "ME","type" => "wpg" ],"date" => [ "id" => "DA","type" => "dat" ],"value" => [ "id" => "VA","type" => "num" ],"author" => [ "id" => "AU","type" => "wpg" ], ] ],
		"role-ref" => [ "id" => "RR","fields" => ["ref" => [ "id" => "RE","type" => "wpg" ],"role" => [ "id" => "RO","type" => "wpg" ], ] ],
		"role-task" => [ "id" => "RT","fields" => ["role" => [ "id" => "RO","type" => "wpg" ],"name" => [ "id" => "NA","type" => "txt" ],"description" => [ "id" => "DE","type" => "txt" ],"hours" => [ "id" => "HO","type" => "num" ],"month" => [ "id" => "MO","type" => "num" ],"responsible" => [ "id" => "RE","type" => "wpg" ], ] ],
		"scj" => [ "id" => "SCJ","fields" => ["prio-strengths" => [ "id" => "PST","type" => "num" ],"prio-total" => [ "id" => "PTO","type" => "num" ],"targeted-sc-result" => [ "id" => "TSR","type" => "txt" ],"status" => [ "id" => "ST","type" => "txt" ],"targeted-sc-action" => [ "id" => "TSA","type" => "txt" ],"prio-easy" => [ "id" => "PEA","type" => "num" ],"name" => [ "id" => "NA","type" => "txt" ],"prio-alignment" => [ "id" => "PAL","type" => "num" ],"prio-unaddressed" => [ "id" => "PUA","type" => "num" ],"archived" => [ "id" => "AR","type" => "boo" ],"hypothesis" => [ "id" => "HY","type" => "wpg" ],"prio-beneficial" => [ "id" => "PBE","type" => "num" ],"targeted-sc-type" => [ "id" => "TST","type" => "txt" ],"targeted-sc-long" => [ "id" => "TSL","type" => "txt" ],"targeted-sc" => [ "id" => "TSC","type" => "txt" ],"system" => [ "id" => "SY","type" => "wpg" ], ] ],
		"salary" => [ "id" => "SA","fields" => ["employee" => [ "id" => "EM","type" => "wpg" ],"limitation" => [ "id" => "LI","type" => "dat" ],"leave" => [ "id" => "LE","type" => "txt" ],"date" => [ "id" => "DT","type" => "dat" ],"reason" => [ "id" => "RE","type" => "txt" ],"start-date" => [ "id" => "SD","type" => "dat" ],"amount" => [ "id" => "AM","type" => "num" ],"year" => [ "id" => "YE","type" => "num" ],"hourly-rate" => [ "id" => "HR","type" => "num" ],"type" => [ "id" => "TY","type" => "txt" ],"note" => [ "id" => "NO","type" => "txt" ],"hours" => [ "id" => "HO","type" => "num" ],"prior-service-periods" => [ "id" => "PS","type" => "txt" ],"exit-type" => [ "id" => "ET","type" => "txt" ],"children" => [ "id" => "CH","type" => "txt" ],"prior-service-periods-leave" => [ "id" => "PSL","type" => "txt" ], ] ],
		"smart-network" => [ "id" => "SN","fields" => ["milestone" => [ "id" => "MI","type" => "wpg" ],"stakeholder" => [ "id" => "SH","type" => "wpg" ],"note" => [ "id" => "NO","type" => "txt" ],"engaged" => [ "id" => "EN","type" => "boo" ],"type" => [ "id" => "TY","type" => "txt" ], ] ],
		"stakeholder" => [ "id" => "SH","fields" => ["scj" => [ "id" => "SCJ","type" => "wpg" ],"name" => [ "id" => "NA","type" => "txt" ],"role" => [ "id" => "RO","type" => "txt" ],"hook" => [ "id" => "HO","type" => "txt" ],"importance" => [ "id" => "IM","type" => "num" ],"engaged" => [ "id" => "EN","type" => "boo" ], ] ],
		"system" => [ "id" => "SY","fields" => ["results" => [ "id" => "RT","type" => "txt" ],"name" => [ "id" => "NA","type" => "txt" ],"description" => [ "id" => "DE","type" => "txt" ],"resources" => [ "id" => "RS","type" => "txt" ],"rules" => [ "id" => "RU","type" => "txt" ], ] ],
		"target-group" => [ "id" => "TG","fields" => ["description" => [ "id" => "DE","type" => "txt" ],"name" => [ "id" => "NA","type" => "txt" ],"challenges" => [ "id" => "CH","type" => "txt" ],"results" => [ "id" => "RS","type" => "txt" ],"responsibilities" => [ "id" => "RP","type" => "txt" ], ] ],
		"task" => [ "id" => "TA","fields" => ["title" => [ "id" => "TI","type" => "txt" ],"due-date" => [ "id" => "DU","type" => "dat" ],"description" => [ "id" => "DE","type" => "txt" ],"done-date" => [ "id" => "DO","type" => "dat" ],"responsible" => [ "id" => "RE","type" => "wpg" ],"dates" => [ "id" => "DA","type" => "" ],"meeting" => [ "id" => "ME","type" => "wpg" ],"done" => [ "id" => "DN","type" => "boo" ],"group" => [ "id" => "GR","type" => "wpg" ],"project" => [ "id" => "PR","type" => "wpg" ], ] ],
		"tool" => [ "id" => "TO","fields" => ["type" => [ "id" => "TY","type" => "txt" ],"stakeholder" => [ "id" => "ST","type" => "wpg" ],"note" => [ "id" => "NO","type" => "txt" ],"how" => [ "id" => "HO","type" => "txt" ],"pro" => [ "id" => "PR","type" => "txt" ],"contra" => [ "id" => "CO","type" => "txt" ],"milestone" => [ "id" => "MI","type" => "wpg" ], ] ],
		"topic" => [ "id" => "TP","fields" => ["name" => [ "id" => "NA","type" => "txt" ],"description" => [ "id" => "DE","type" => "txt" ],"category" => [ "id" => "CA","type" => "wpg" ],"type" => [ "id" => "TY","type" => "txt" ], ] ],
		"topic-category" => [ "id" => "TC","fields" => ["name" => [ "id" => "NA","type" => "txt" ],"description" => [ "id" => "DE","type" => "txt" ], ] ],
		"transfer" => [ "id" => "TR","fields" => ["sender" => [ "id" => "SE","type" => "wpg" ],"list" => [ "id" => "LI","type" => "wpg" ],"recipient" => [ "id" => "RE","type" => "wpg" ],"listed" => [ "id" => "LD","type" => "boo" ],"amount" => [ "id" => "AM","type" => "num" ],"year" => [ "id" => "YE","type" => "num" ],"date" => [ "id" => "DA","type" => "dat" ],"type" => [ "id" => "TY","type" => "txt" ],"details" => [ "id" => "DE","type" => "txt" ],"note" => [ "id" => "NO","type" => "txt" ],"subject" => [ "id" => "SU","type" => "txt" ], ] ],
		"transfer-list" => [ "id" => "TL","fields" => ["date" => [ "id" => "DT","type" => "dat" ],"transfer-date" => [ "id" => "TD","type" => "dat" ],"transferred" => [ "id" => "TR","type" => "boo" ],"note" => [ "id" => "NO","type" => "txt" ], ] ],
		"travel-expenses" => [ "id" => "TE","fields" => ["person" => [ "id" => "PE","type" => "wpg" ],"total" => [ "id" => "TO","type" => "num" ],"expenses" => [ "id" => "EX","type" => "num" ],"project" => [ "id" => "PR","type" => "wpg" ],"date" => [ "id" => "DA","type" => "dat" ],"dates" => [ "id" => "DT","type" => "" ],"means" => [ "id" => "ME","type" => "txt" ],"description" => [ "id" => "DE","type" => "txt" ],"quarter" => [ "id" => "QU","type" => "num" ],"start" => [ "id" => "SD","type" => "dat" ],"duration" => [ "id" => "DU","type" => "num" ],"destination" => [ "id" => "DS","type" => "txt" ],"year" => [ "id" => "YE","type" => "num" ],"end" => [ "id" => "ED","type" => "dat" ],"distance" => [ "id" => "DI","type" => "num" ],"allowance-day" => [ "id" => "AD","type" => "num" ],"start-time" => [ "id" => "ST","type" => "txt" ],"allowances" => [ "id" => "AL","type" => "num" ],"allowance-night" => [ "id" => "AN","type" => "num" ],"end-time" => [ "id" => "ET","type" => "txt" ], ] ],
		"vacation" => [ "id" => "VA","fields" => ["person" => [ "id" => "PE","type" => "wpg" ],"start-date" => [ "id" => "SD","type" => "dat" ],"end-date" => [ "id" => "ED","type" => "dat" ],"note" => [ "id" => "NO","type" => "txt" ], ] ],
		"working-time" => [ "id" => "WT","fields" => ["person" => [ "id" => "PE","type" => "wpg" ],"day" => [ "id" => "DA","type" => "num" ],"time" => [ "id" => "TI","type" => "txt" ],"note" => [ "id" => "NO","type" => "txt" ], ] ],
	];


	public static function getPropertyNamesForTemplate( $template_name ) {
		$properties = array_merge( self::$properties, $GLOBALS['wgSemorgAdditionalProperties'] );
		if( isset( $properties[$template_name] ) ) {
			return array_keys( $properties[$template_name]['fields'] );
		} else {
			return false;
		}
	}


	public static function getPropertiesForTemplate( $template_name ) {
		$properties = array_merge( self::$properties, $GLOBALS['wgSemorgAdditionalProperties'] );
		if( isset( $properties[$template_name] ) ) {
			return $properties[$template_name]['fields'];
		} else {
			return false;
		}
	}


	public static function onsmwInitProperties(PropertyRegistry $propertyRegistry) {
		$properties = array_merge( self::$properties, $GLOBALS['wgSemorgAdditionalProperties'] );
		foreach( $properties as $template_name => $template ) {
			if( isset( $template['id'] ) ) {
				$template_id = $template['id'];
				if( isset( $template['fields'] ) ) {
					foreach( $template['fields'] as $field_name => $field ) {
						if( isset( $field['id'] ) && isset( $field['type'] ) ) {
							$id = '___SO_' . $template_id . '_' . $field['id'];
							$valueType = '_' . $field['type'];
							$label = 'Semorg-' . $template_name . '-' . $field_name;

							$propertyRegistry->registerProperty( $id, $valueType, $label, true );

							/* @todo: a possibility to have aliases for property labels (need to be unique!)
							$msgKey = 'semorg-property-' . $template_name . '-' . $field_name . '-alias';
							if( wfMessage( $msgKey )->exists() ) {
								$propertyRegistry->registerPropertyAliasByMsgKey( $id, $msgKey );
							}
							*/
						}
					}
				}
			}
		}
	}

}
