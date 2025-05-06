<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DownloadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Forms',
                'link' => '',
                "data"=>[
                    [
                        'name' => 'Account Opening Form',
                        'link' => 'https://drive.google.com/file/d/1JpKiDawLnQin_OPutJwojU9zUmsdH5XN/view',
                    ],
                    [
                        'name' => 'Email/Mobile No. Change Form',
                        'link' => 'https://drive.google.com/file/d/1Wt_VJLEQWuV3HQ0YohUdqWiCp8vRGSHh/view',
                    ],
                    [
                        'name' => 'NDML – Individual Autorisation Form',
                        'link' => 'https://drive.google.com/file/d/1Ozr-rMAxXDjcPL-s5xV3SU1aUapSAHOo/view',
                    ],
                    [
                        'name' => 'Reactivation of Trading Account',
                        'link' => 'https://drive.google.com/file/d/1YmVCw8Vf8EZGQ877rQR2N9B9G72tvnJj/view',
                    ],
                    [
                        'name' => 'Due Diligence',
                        'link' => 'https://drive.google.com/file/d/17nW5S-tBO7SJXniY-1fTHy5AsGJ9i6PM/view',
                    ],
                    [
                        'name' => 'Bank Change Form',
                        'link' => 'https://drive.google.com/file/d/1mpNgDt4S2UF_tRVvNk0G3BARy5xWpXtW/view',
                    ],[
                        'name' => 'Electronic Authorisation Form',
                        'link' => 'https://drive.google.com/file/d/1dt9ZMCmY0xPxKgwkBP0CmB8YUy2c6SwE/view',
                    ],[
                        'name' => 'Nomination Form',
                        'link' => 'https://docs.google.com/document/d/1YDIPieqxOO52BWr15OePM_PlBtccnfdK/edit?tab=t.0#heading=h.gjdgxs',
                    ],[
                        'name' => 'Reissuance of DIS Letter (In case of Lost/Misplaced DIS)',
                        'link' => 'https://drive.google.com/file/d/1EDwf0NXnVak570mQ8OEhEIDOjw0Yn5c5/view',
                    ],[
                        'name' => 'Notifier Intimation',
                        'link' => 'https://drive.google.com/file/d/1cb8dsDfXzavCu5BlsJOEfyzh4bafHPKF/view',
                    ],[
                        'name' => 'CDSL/NSDL Account Closure Form',
                        'link' => 'https://drive.google.com/file/d/1YKHuICeD8HkQLmkXm1X9G6qXajewjl4D/view',
                    ],[
                        'name' => 'Combined Modification Form',
                        'link' => 'https://drive.google.com/file/d/1dt9ZMCmY0xPxKgwkBP0CmB8YUy2c6SwE/view',
                    ],[
                        'name' => 'NSDL Change in Signature Form',
                        'link' => 'https://drive.google.com/file/d/1mCEGg4I3CnUt4anh_idTOwQ1hlAy-RWl/view',
                    ],[
                        'name' => 'Running Account Authorisation',
                        'link' => 'https://drive.google.com/file/d/1ou-UZrHCT8k9pcoQhG0ONqWICiGswVSS/view',
                    ],[
                        'name' => 'NSDL - Transmission',
                        'link' => 'https://drive.google.com/file/d/1MEkmHB2WWL-SyZXmp8J369xplNVVsYYH/view',
                    ],[
                        'name' => 'Beneficiary Details',
                        'link' => 'https://techtrade.in/wp-content/uploads/Off-Market-Addition-of-beneficiary-details-1.pdf',
                    ],
                ]
            ],
            [
                'name' => 'Policies',
                'link' => '',
                "data"=>[
                    [
                        'name'=>"Authorised Person Policy",
                        "link"=>'https://drive.google.com/file/d/1dCFtC4KGN8dLx74VOxn8Ji-6R6x4CL3l/view?usp=drive_link'
                    ],[
                        'name'=>"Code of Conduct Policy",
                        "link"=>'https://drive.google.com/file/d/1TXZmTeyB2HJXdHOsMDP60B1tpeoiGy4I/view'
                    ],[
                        'name'=>"Cyber Security Policy",
                        "link"=>'https://drive.google.com/file/d/1HWIlmK-jHaS7g_kwp5eyefn904YHoPn0/view?usp=drive_link'
                    ],[
                        'name'=>"Dormant Account Policy",
                        "link"=>'https://drive.google.com/file/d/1s84pYE_19Doj6OuZRA1NmYgUtaD0J5aK/view'
                    ],[
                        'name'=>"Internet Access Policy",
                        "link"=>'https://docs.google.com/document/d/1go2T1v1MlQA3aoEo3KDE6f4Q46ouIini/edit?tab=t.0'
                    ],[
                        'name'=>"PMLA Policy",
                        "link"=>'https://drive.google.com/file/d/1OA01QNws9Mg_7KnYgGfQ2tK1bTg-jNJP/view?usp=drive_link'
                    ],[
                        'name'=>"Risk Management System Policy",
                        "link"=>'https://drive.google.com/file/d/1b7psQ35hZwkrOSYSxUigJx1AnrrQ694R/view?usp=drive_link'
                    ],[
                        'name'=>"Surveillance Policy",
                        "link"=>'https://drive.google.com/file/d/1LKeFyCCheOgBvRX5hd0lE27HL12BLpy2/view?usp=drive_link'
                    ],[
                        'name'=>"Patch Management Policy",
                        "link"=>'https://drive.google.com/file/d/1qJKKRSli5Ol6YquMBg4HGc8M0X9kkgvm/view?usp=drive_link'
                    ],[
                        'name'=>"Technical Glitch Policy",
                        "link"=>'https://drive.google.com/file/d/1wNLUMKso584V836PMpZzMt1MVeaUluoq/view?usp=drive_link'
                    ],[
                        'name'=>"Client Code Modification and Error Code Policy",
                        "link"=>'https://drive.google.com/file/d/1SEEZwwLUHpF0VtqIoGBGUmApooiMAKgL/view?usp=drive_link'
                    ],[
                        'name'=>"CSR Policy",
                        "link"=>'https://drive.google.com/file/d/1RmCEQ1ldajmjIcYFYKoM92_OwFd4CGLW/view?usp=drive_link'
                    ],[
                        'name'=>"Data Disposal and Data Retention Policy",
                        "link"=>'https://drive.google.com/file/d/1b_wcPeQ_Xv0RTou7_9AtNMYpcABCTsks/view?usp=drive_link'
                    ],[
                        'name'=>"Disaster Management and Retention Policy",
                        "link"=>'https://drive.google.com/file/d/1LMAFXaGOaEln-b9TZmnCNoFUDDWvfsLj/view?usp=drive_link'
                    ],[
                        'name'=>"Investor Grievance Redressal Policy",
                        "link"=>'https://drive.google.com/file/d/1v1pVgARaMVCp2AXR7ZuKC9fd1--JFd_w/view?usp=drive_link'
                    ],[
                        'name'=>"Policy for Pre-Funded Instruments",
                        "link"=>'https://drive.google.com/file/d/1II8Orm2vYR3iEuChOFjXct_zQsCCDiLH/view?usp=drive_link'
                    ],[
                        'name'=>"Shortages In Obligation Arising Out of Internal Netting of Trades",
                        "link"=>'https://drive.google.com/file/d/19xbx8wWJz3Y9fOx-RITvCZMn2CeRbc_h/view?usp=drive_link'
                    ],[
                        'name'=>"Tools and Recovery Plan of Cyber Attack",
                        "link"=>'https://drive.google.com/file/d/1oD1EGxD5C9xNhFNpmnwh11kNpm3lRTr9/view?usp=drive_link'
                    ],[
                        'name'=>"Password Policy & Procedure",
                        "link"=>'https://drive.google.com/file/d/1CiF2b8PXd4JnXJmb_ZAunvehhVUzdQNW/view?usp=drive_link'
                    ],[
                        'name'=>"Internal Shortage Policy",
                        "link"=>'https://docs.google.com/document/d/1dhZkKMOkGC6WNYUy6iWkmiwxaC7pW8sr/edit?tab=t.0'
                    ],[
                        'name'=>"CDSL/NSDL Account Closure Form",
                        "link"=>'https://drive.google.com/file/d/1YKHuICeD8HkQLmkXm1X9G6qXajewjl4D/view'
                    ],[
                        'name'=>"Customer Acceptance Policy",
                        "link"=>'https://drive.google.com/file/d/1ZHw7QeSKc6jvj9DpxQ7SYpTyAdGpsfs8/view?usp=drive_link'
                    ],[
                        'name'=>"Data Protection and Data Encryption Policy",
                        "link"=>'https://drive.google.com/file/d/1_eaYyWr830e2C0GNkXiMkEuTDMaaZqUf/view?usp=drive_link'
                    ],[
                        'name'=>"Internal Control Policy",
                        "link"=>'https://drive.google.com/file/d/1wVkcbL1tZum-53y2OzrmHwq-0s9uaos_/view?usp=drive_link'
                    ],[
                        'name'=>"Policy on Management of Conflict of Interests",
                        "link"=>'https://drive.google.com/file/d/1v-zGv--dOo-cju_aPmhVIuiRDl5L6Q8d/view?usp=drive_link'
                    ],[
                        'name'=>"Policy Regarding Treatment Of Inactive Dormant Accounts",
                        "link"=>'https://drive.google.com/file/d/1v-zGv--dOo-cju_aPmhVIuiRDl5L6Q8d/view?usp=drive_link'
                    ],[
                        'name'=>"Surveillance Policy of Depository Participant",
                        "link"=>'https://drive.google.com/file/d/1tnctZ42EtlJl7x08oIdHG7baRap89cTR/view?usp=drive_link'
                    ],[
                        'name'=>"Policy on Conflict Of Interest",
                        "link"=>'https://docs.google.com/document/d/1DCKzOnxFyMlUXIvfZLFbmGQyuy8mwe51/edit?tab=t.0'
                    ],[
                        'name'=>"Policy For Unauthorized News Circulation & Code Of Conduct",
                        "link"=>'https://drive.google.com/file/d/1Ye8EN2SdItWslW8AnzVcTs2z5hzJoqdW/view?usp=drive_link'
                    ],[
                        'name'=>"Internet Access Policy",
                        "link"=>'https://drive.google.com/file/d/1FWadhR_nXPvNEhFAfSD48g-FOPmSLlI4/view?usp=drive_link'
                    ],
                ]
            ],
            [
                'name'=>'Cyber Policy',
                "link"=>"",
                "data"=>[
                    [
                        "name"=>"Cyber Policy",
                        "link"=>"https://drive.google.com/file/d/1mZ26heHxAyNZqrkXP_RX_P9tzghPKyej/view?usp=drive_link"
                    ]
                ]
            ],
            [
                'name'=>'Account Related Form',
                "link"=>"",
                "data"=>[
                    [
                        "name"=>"Client Copy Pdf",
                        "link"=>"https://drive.google.com/file/d/1GOh_5lF1OYDbnHnPpCk3YK6Fb4P7ihUg/view?usp=drive_link"
                    ],[
                        "name"=>"Document List (Huf) pdf 3",
                        "link"=>"https://drive.google.com/file/d/1_Ko3SKXfM8M_IzuVkktUgqCiDpy-w9WY/view?usp=drive_link"
                    ],[
                        "name"=>"Document (Non individual) pdf 2",
                        "link"=>"https://drive.google.com/file/d/1SwAXw_eDI87p5hpz7srfFhobXyYona7Z/view?usp=drive_link"
                    ],[
                        "name"=>"Document Checklist pdf 1",
                        "link"=>"https://drive.google.com/file/d/1I3XiA-3xKeHEKOBWjrhNXgnfzSvwhCIi/view?usp=drive_link"
                    ],
                ]
            ],
            [
                
                "name"=>"Vernacular Language",
                "link"=>"",
                "data"=>[
                    [
                        "name"=>"Assame Annexure 1",
                        "link"=>"https://drive.google.com/file/d/1pKOPQ_gCZQlo72NEph4XzBkiZv8NmR9b/view?usp=drive_link"
                    ],[
                        "name"=>"Bengali Annexure 1",
                        "link"=>"https://drive.google.com/open?id=1_OhEHY2S808kjsXHNqFvhAhxZoSegf4D&usp=drive_copy"
                    ],[
                        "name"=>"Gujarati Annexure 1",
                        "link"=>"https://drive.google.com/open?id=1IxWOmz6lIqOtD3SJ13wngw2miorjYn-9&usp=drive_copy"
                    ],[
                        "name"=>"Hindi Annexure 1",
                        "link"=>""
                    ],[
                        "name"=>"Kannada Annexure 1",
                        "link"=>"https://drive.google.com/open?id=16srrRr6GnecCZYriv3mqGddufyXVLbVZ&usp=drive_copy"
                    ],[
                        "name"=>"Kashmari Annexure 1",
                        "link"=>"https://drive.google.com/open?id=1BQnk6DYL6KQyHlsVGaSaLaD8O9HF9vbC&usp=drive_copy"
                    ],[
                        "name"=>"Konkani Annexure 1",
                        "link"=>"https://drive.google.com/open?id=1VkvcjMwxpyrGgi_vJYm2yBvc_hjrCzLe&usp=drive_copy"
                    ],[
                        "name"=>"Malyalam Annexure 1",
                        "link"=>"https://drive.google.com/open?id=1Y80n3fDGBP1TTuGaumeSd9l7B-dAGzKF&usp=drive_copy"
                    ],[
                        "name"=>"Marathi Annexure 1",
                        "link"=>"https://drive.google.com/open?id=1UiyEgDKZvt73coe3Hv9VQ9NW3LmlsRnl&usp=drive_copy"
                    ],[
                        "name"=>"Oriya Annexure 1",
                        "link"=>"https://drive.google.com/open?id=1AWymb2seZZ1cPsBy9FofMSXLy3IHb5l0&usp=drive_copy"
                    ],[
                        "name"=>"Punjabi Annexure 1",
                        "link"=>"https://drive.google.com/open?id=1wGmtbqitCnaSwVd4BZB6A_Z_7zZxjZ-K&usp=drive_copy"
                    ],[
                        "name"=>"Sindhi Annexure 1",
                        "link"=>"https://drive.google.com/open?id=17wGX1m1kqyQn1NHSBe8LdS_kFsB0UPeQ&usp=drive_copy"
                    ],[
                        "name"=>"Tamil Annexure 1",
                        "link"=>"https://drive.google.com/open?id=17HiSdEq1BKL8OZzGp5YSwcvWCOjjusA9&usp=drive_copy"
                    ],[
                        "name"=>"Telgu Annexure 1",
                        "link"=>"https://drive.google.com/open?id=1oZsSA8NiGZTiwQH_kgoWoRHEEczcCvXw&usp=drive_copy"
                    ],[
                        "name"=>"Urdu Annexure 1",
                        "link"=>"https://drive.google.com/open?id=1x3yWphktfkJJK7EYfcCd-h3B5OcBk_EQ&usp=drive_copy"
                    ],[
                        "name"=>"Assame Annexure 2",
                        "link"=>"https://drive.google.com/file/d/1lytcSPtxEnIewsY7AG31fxX0oIGXKulW/view?usp=drive_link"
                    ],[
                        "name"=>"Bengali Annexure 2",
                        "link"=>"https://drive.google.com/open?id=1idFYYqp20EZJlXzacWmGR3p-kokUslzn&usp=drive_copy"
                    ],[
                        "name"=>"Gujarati Annexure 2",
                        "link"=>"https://drive.google.com/open?id=1-w_Bsv7VTFMLXrYhqZSW-lRqNBGvc3z0&usp=drive_copy"
                    ],[
                        "name"=>"Hindi Annexure 2",
                        "link"=>"https://drive.google.com/open?id=1FmIzHpNJbnO6Dcw2m1D43jmqB09DFqg0&usp=drive_copy"
                    ],[
                        "name"=>"Kannada Annexure 2",
                        "link"=>"https://drive.google.com/open?id=15l5GEfJiD_op2OIU8PS9dCbQWbQGFWb_&usp=drive_copy"
                    ],[
                        "name"=>"Kashmari Annexure 2",
                        "link"=>"https://drive.google.com/open?id=1w9KrC_q0jyK0KJLNaVfrXnfZkP622OEv&usp=drive_copy"
                    ],[
                        "name"=>"Konkani Annexure 2",
                        "link"=>"https://drive.google.com/open?id=1dhvc78idiZbzfzZ31wP1aqpqht147KOo&usp=drive_copy"
                    ],[
                        "name"=>"Malyalam Annexure 2",
                        "link"=>"https://drive.google.com/open?id=1J7AHuGtPJ3jEm9pWSn5Q3rvKakGnZc6d&usp=drive_copy"
                    ],[
                        "name"=>"Marathi Annexure 2",
                        "link"=>"https://drive.google.com/open?id=1g9sFZT2fp6_h5JHVbsJ7UHkUTwdwxraN&usp=drive_copy"
                    ],[
                        "name"=>"Oriya Annexure 2",
                        "link"=>"https://drive.google.com/open?id=1a7F-k38Izr2IoHM9n7LgKORor-nVjZWE&usp=drive_copy"
                    ],[
                        "name"=>"Punjabi Annexure 2",
                        "link"=>"https://drive.google.com/open?id=19X43VeYTBP2eHPdZA13Ldb--znVfORSY&usp=drive_copy"
                    ],[
                        "name"=>"Sindhi Annexure 2",
                        "link"=>"https://drive.google.com/open?id=16KHsaSVXn-3o4ueBbtQ8gItusUGNcllp&usp=drive_copy"
                    ],[
                        "name"=>"Tamil Annexure 2",
                        "link"=>"https://drive.google.com/open?id=17q2j7LyLitC4tC5WuLHmMxsieJOgEejq&usp=drive_copy"
                    ],[
                        "name"=>"Telgu Annexure 2",
                        "link"=>"https://drive.google.com/open?id=1piQHuEVOUepCAWuvRVOiqo6kgDGnI-VK&usp=drive_copy"
                    ],[
                        "name"=>"Urdu Annexure 2",
                        "link"=>"https://drive.google.com/open?id=1vWxJ3hIPxIW4Bbf2X41_3w1LvkC-6csu&usp=drive_copy"
                    ],[
                        "name"=>"Assame Annexure 3",
                        "link"=>"https://drive.google.com/file/d/1CD5JzJ8UwIN-WERSfocZJmpakq29POFW/view?usp=drive_link"
                    ],[
                        "name"=>"Bengali Annexure 3",
                        "link"=>"https://drive.google.com/open?id=1vWmB_L9xLb6pmfLjgttwlRT2AvFlESaK&usp=drive_copy"
                    ],[
                        "name"=>"Gujarati Annexure 3",
                        "link"=>"https://drive.google.com/open?id=1diGNkGA5JK0jbPTIaCGkylj1ijehIdXC&usp=drive_copy"
                    ],[
                        "name"=>"Hindi Annexure 3",
                        "link"=>"https://drive.google.com/open?id=13LccPQeT02kCICukrrozWuMfdlx-iDn3&usp=drive_copy"
                    ],[
                        "name"=>"Kannada Annexure 3",
                        "link"=>"https://drive.google.com/open?id=14K38_Uz6guqddWrdwrohhqePTrbEembQ&usp=drive_copy"
                    ],[
                        "name"=>"Kashmari Annexure 3",
                        "link"=>"https://drive.google.com/open?id=1Z72yidBAiNiPq2kT1uW0-LHaSHG1dtOd&usp=drive_copy"
                    ],[
                        "name"=>"Konkani Annexure 3",
                        "link"=>"https://drive.google.com/open?id=1t9VyhNJOE60FRZG714aZH4A6dMoS0Xf0&usp=drive_copy"
                    ],[
                        "name"=>"Malyalam Annexure 3",
                        "link"=>"https://drive.google.com/open?id=1fKMJxWsB63wu1NkHVNC0qaRtNbPzhrxG&usp=drive_copy"
                    ],[
                        "name"=>"Marathi Annexure 3",
                        "link"=>"https://drive.google.com/open?id=1cKlBO22IZtghyHcPyorPLdHXHNeBKsVh&usp=drive_copy"
                    ],[
                        "name"=>"Oriya Annexure 3",
                        "link"=>"https://drive.google.com/open?id=1KE-7nOaVL022jk2JVgqeuRzqiKa2Oq9m&usp=drive_copy"
                    ],[
                        "name"=>"Punjabi Annexure 3",
                        "link"=>"https://drive.google.com/open?id=1_PdrwJSJ_hK1Wv3kFyuShGxMXJgxzSQT&usp=drive_copy"
                    ],[
                        "name"=>"Sindhi Annexure 3",
                        "link"=>"https://drive.google.com/open?id=1I1HizPCLUlKXmKu3UR3xXmp_YqhM6czl&usp=drive_copy"
                    ],[
                        "name"=>"Tamil Annexure 3",
                        "link"=>"https://drive.google.com/open?id=1O8J4dH8vtXzLkAA6VISlahBzMKyFdqUH&usp=drive_copy"
                    ],[
                        "name"=>"Telgu Annexure 3",
                        "link"=>"https://drive.google.com/open?id=1zghbTa1uADYliYPbdXa-NIVW489MWfqN&usp=drive_copy"
                    ],[
                        "name"=>"Urdu Annexure 3",
                        "link"=>"https://drive.google.com/open?id=1_-P2uGR6RIpYlmbmwkzArRTJgz7fwwo2&usp=drive_copy"
                    ]
                ]
            ]

        ];

        \DB::table('categories')->delete(); // Delete all records
		\DB::statement('ALTER TABLE categories AUTO_INCREMENT = 1');

        foreach($data as $val){

            $category = new \App\Models\Category();
            $category->name = $val['name'];
            $category->slug = \Str::slug($val['name']);
            $category->save();
            foreach($val['data'] as $link){
                $download = new \App\Models\Category();
                $download->parent_id = $category->id;
                $download->name = $link['name'];
                $download->slug = \Str::slug($link['name']);
                $download->link = $link['link'];
                $download->save();
            }
        }
        
    }
}
