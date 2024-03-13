<!-- CSI 3140 - WWW -->
<!-- Assignment 6-->
<!-- @StevenWilson & @EdgarAcosta -->

<!-- 

    Q15.9 

    15.9 (Nutrition Information XSL Style Sheet) Write an XSL style sheet for your 
    solution to Exercise 15.7 that displays the nutritional facts in an HTML5 table.

 -->

 <!-- ran this command to get the output.html file:
    
        xsltproc nutrition.xsl nutrition.xml > output.html
        
 -->

<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    
    <xsl:template match="/">

    <html>
        <head>
        <title>Grandma White's Cookies</title>
        <style>
            table {
                border-collapse: collapse;
                width: 100%;
            }
            th, td {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }
            th {
                background-color: #f2f2f2;
            }
        </style>
        </head>

        <body>
            <h1>Nutrition Facts</h1>
            <table>
                <tr>
                    <th>Item</th>
                    <th>Quantity</th>
                </tr>
                <xsl:apply-templates select="cookie/nutritionFacts/*"/>
            </table>
        </body>
    </html>
    </xsl:template>

    <xsl:template match="nutritionFacts/*">
        <tr>
            <td><xsl:value-of select="local-name()"/></td>
            <td><xsl:value-of select="."/></td>
        </tr>
    </xsl:template>

</xsl:stylesheet>