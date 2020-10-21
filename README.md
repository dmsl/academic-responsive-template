# Academic Responsive (AR) Website Template

## A Responsive HTML5/CSS3 template for setting up an academic website.

This template is implemented in Bootstrap (a popular HTML, CSS, and JS framework for developing responsive, mobile first projects on the web). The template has been tested on iOS, Windows Phone, Android, Chrome, Safari and other browsers. Some of its features require external free components (e.g., Google Custom Search for site-search, Twitter widget for news, Smartbib for publication indexing). Additionally, having a CV in LATEX format will help to automate the generation of material and streamline consistency between your CV and your website. You will need to edit the sources with a text editor or a capable WYSIWYG editor.

The original idea for setting up this template was to make an academic profile easily accessible from a smartphone.

The template is free and open to reuse under a CC BY 4.0 licence.

Enjoy!

Copyright (c) 2015, Demetris Zeinalipour, Department of Computer Science
University of Cyprus.

All rights reserved.

## Creative Commons CC BY 4.0 licence 

The AR template is open to reuse under a CC BY 4.0 licence. This license lets others distribute, remix, tweak, and build upon AR even commercially, as long as they credit the original creation in the footer of the site. This is the most accommodating of licenses offered. Recommended for maximum dissemination and use of licensed materials.

More: http://creativecommons.org/licenses/by/4.0/legalcode

## Credits

To use AR on your site, please add the following code at the end of your website:
```html
<footer>
    <small>
    <center>
        © YEAR | YOURNAME. Credits: AR template
    <a onclick="javascript:$('#credit').toggle();"><img border="0" src="images/ccby.png"/></a>
    <div style="display:none;" id="credit">[AR template available under Creative Commons CC BY 4.0 licence: 
    <a href="https://github.com/dmsl/academic-responsive-template" target="_blank">
        https://github.com/dmsl/academic-responsive-template 
    </a> ]
    </div>
    </center>
    </small>
</footer>
```

## Components 

Short description of the contents included in this release.

- index.html : Contains most of the website material (single-page layout). Change this accordingly.
- bio.html: Add your Short Bio
- cv.html: To generate the content of this file effectively, first generate your CV from a latex file: "latex2html -no_math -html_version 3.2,math -split 0 yourcv.tex " Please use the sources under "CV-latex" if you don't have your own CV template. Then copy/paste the material onto cv.html
- publications: tenatively add your publications in bibtex format to the following file publications/demo.bib. If PHP is available on your webserver, this will show the bibtex entries neatly.
- talks: tenatively add your talks in bibtex format to the following file talks/presentations/demo.bibIf PHP is available on your webserver, this will show the bibtex entries neatly.
- Search Box: Setup a custom search box through Google. Replace the respective javascript in the HTML files to make your new search box effective.

## CR (Course Responsive) Template

Also check out the sister template designated for courses: https://github.com/dmsl/course-responsive-template

## Adopter Sites (in order we became aware of)

1. Dr. Demetris Zeinalipour, University of Cyprus (latest version), http://www.cs.ucy.ac.cy/~dzeina/
2. Dr. Pavlos Antoniou, University of Cyprus, Cyprus, https://www.cs.ucy.ac.cy/~csp5pa1/
3. Dr. Georgios Chatzimilioudis, University of Cyprus, Cyprus, https://www.cs.ucy.ac.cy/~gchatzim/
4. Dr. Federico Mari, Sapienza University of Rome, Italy, http://mari.di.uniroma1.it/index.html
5. Dr. Francesco Belardo, University of Naples Federico II, Italy, http://www.dma.unina.it/belardo/index.html
6. Dr. Karthik Dantu, University at Buffalo, NY, USA, https://cse.buffalo.edu/faculty/kdantu/index.html
7. Dr. Kenji Aono, Washington University in St. Louis, USA: https://kenji.pro/index.html
8. Thomas Vilarinho, Sintef, Norway, https://www.tvilarinho.com/
9. Amirhossein Sobhani, University of Science and Technology - Tehran, Iran: http://webpages.iust.ac.ir/a_sobhani/
10. Charles Middlicott, Univ. of Derby - Derby, UK, https://www.charlesmiddlicott.co.uk/index.html
11. Mohammad Reza Bahrami, Sharif University of Technology, Iran, http://ce.sharif.edu/~mrbahrami/
12. Jessica Ryan, University of Glasgow, UK, https://jessryan.co.uk/
13. Chrysovalantis Anastasiou, University of Southern California, USA, https://canastas.info/
14. Kuniaki Saito, Boston University, USA, http://cs-people.bu.edu/keisaito
15. Dr. Majid Abdolshah, Deakin University, Australia, http://majid.website/index.html
16. Embedded Artificial Intelligence Lab, Beijing, China, https://embeddedai.github.io/index.html
17. Dr. Ashwin Ashok, Georgia State University, GA, USA, http://mobile.cs.gsu.edu/aashok/
18. Centre for Philosophy of Memory,  Université Grenoble Alpes, France, http://phil-mem.org/index.php
19. Anthony Chen, University of California - Irvine, CA, USA, https://anthonywchen.github.io/
20. Charles Middlicott, University of Derby, UK, https://www.charlesmiddlicott.co.uk/
21. Calum Buchanan, University of Vermont, USA http://www.uvm.edu/~cjbuchan/
22. Dr. Hao Wang, Stanford University, CA, USA, https://web.stanford.edu/~haowang6
23. Lu Xing, Purdue University, IN, USA, https://www.cs.purdue.edu/homes/xingl/
24. Dr. Deepayan Bhowmik, University of Stirling, UK, http://www.cs.stir.ac.uk/~dbh/
25. Dr. Sabeur Elkosantini, University of Carthage, Tunisia, http://sabeur.elkosantini.me/
26. Chao Li, Princeton, USA, https://web.math.princeton.edu/~chaoli/
27. Zulqarnain Haider, University of South Florida, USA, http://eng.usf.edu/~zulqarnain/index.html
28. Dr. Benjamin Rudshteyn, Columbia University, NY, USA, http://www.columbia.edu/~br2575/
29. Dr. Amiangshu Bosu, Wayne State University, MI, USA, http://amiangshu.com/
30. André Mateus, Instituto Superior Técnico, Lisboa, Portugal, http://web.tecnico.ulisboa.pt/andre.mateus/
31. Arturo González-Ferrer, IATA, Madrid, Spain, http://www.ugr.es/~arturogf/
32. İlker Bozcan, Turkey, Middle East Technical University, Turkey, http://kovan.ceng.metu.edu.tr/~ilker
33. Prof. Tom Kelsey, University of St Andrews, UK, https://tom.host.cs.st-andrews.ac.uk/index.html
34. Dr. Elyes NEFZAOUI, Univ. Paris Est, France, https://perso.esiee.fr/~nefzaoue/
35. Dr. Pierre Meyer, IDC Herzliya, Israel, https://cs.idc.ac.il/~pierre.meyer/
36. Mohammad Reza Bahrami, Sharif University of Technology, Iran, http://ce.sharif.edu/~mrbahrami/
37. Dr. Anastasios C. Politis, International Hellenic University, Greece, http://teachers.cm.ihu.gr/politis/start.htm
38. Dr. Denys Rozumnyi, Czech Technical University in Prague, Czech Republic, http://cmp.felk.cvut.cz/~rozumden/
39. Prof. Jianwei Niu, University of Texas at San Antonio, TX, USA, http://www.cs.utsa.edu/~niu/
40. Kai Zhou, The Hong Kong Polytechnic University, https://www4.comp.polyu.edu.hk/~kaizhou/
41. Rohit Voleti, Arizona State University - Tempe, AZ, USA, https://www.public.asu.edu/~rnvoleti/index.html
42. Guanghui Qin, Johns Hopkins University, USA, https://hiaoxui.com/
43. Suman Majumdar, Indian Institute of Technology Indore, India, http://people.iiti.ac.in/~sumanm/
44. Ragib Ahsan, University of Illinois at Chicago, USA,  https://rahsan3.people.uic.edu/bio.html
45. Mirko Polato, University of Padova, Italy, https://www.math.unipd.it/~mpolato/
46. Dr. Ni Zhao, Johns Hopkins University, USA, http://www.biostat.jhsph.edu/~nzhao/
47. Dr. Istvan Andras Seres, Eotvos Lorand University - Budapest, HUN, http://istvanseres.web.elte.hu/index.html
48. Prof. Samuel Pagliarin, Tallinn University of Technology (TalTech), Finland, https://ati.ttu.ee/~spagliar/
49. Dr. Nikolaos Ploskas, Prof. University of Western Macedonia, Greece, http://users.uowm.gr/nploskas/
50. Dr. Francisco Javier Bermúdez Ruiz, University of Murcia, Spain, http://dis.um.es/~jbermudez/index.html
51. Shuo Wu, Beijing University, China, https://whuosu.top/
52. Ashokkumar C, Indian Institute of Technology Bombay (IIT Bombay), India, https://www.cse.iitb.ac.in/~ashokkumar/
53. John van de Wetering, Radboud University Nijmegen, The Netherlands, http://vdwetering.name/
54. Marimuthu C, National Institute of Technology Karnatakam, India, http://www.clarifyed.in/marimuthu/index.html
55. MD. Tanmay Gokhale, University of Pittsburgh Medical Center, PA, USA, http://www.tgokhale.com/
56. Dr. Guohao Lan, Duke University, USA, https://guohao.netlify.app/
57. Austin Clyde, University of Chicago, USA, http://austinclyde.com/
58. Jorge Castro-Godínez, Tecnológico de Costa Rica, Costa Rica, http://www.ie.tec.ac.cr/jocastro/
59. Shuotao Xu, Massachusetts Institute of Technology, MA, USA, http://people.csail.mit.edu/shuotao/
60. Angela Chantre Astaiza, Universidad del Cauca, Colombia, http://angelachantre.com/indexEN.html
61. Manh Duong Phung, Vietnam National University, Hanoi https://uet.vnu.edu.vn/~duongpm/
62. Rui Zhu. University of California, Santa Barbara, CA, USA, http://www.geog.ucsb.edu/~zhu/
62. 









More: 

