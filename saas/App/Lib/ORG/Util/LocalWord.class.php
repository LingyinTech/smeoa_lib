<?php

class LocalWord {
    public $filePath = 'order.doc';
    public $filename = 'order.doc';
    
    public function __construct($param){
        if(isset($param['filename'])){
            $this->filename = $param['filename'];
        }
    }

    public function generateword($path,$order){
        if(!empty($path)){
          $this -> filePath = $path;
        }

        $this -> start(); 
        $this -> wordstruc($order);
        $this -> saveword($this -> filePath); 
        //每次执行前刷新缓存 
        ob_flush();
        flush(); 
    }

    private function start()
    {
        ob_start();
        //office 07文件头
        echo '<html xmlns:v="urn:schemas-microsoft-com:vml"
xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:w="urn:schemas-microsoft-com:office:word"
xmlns:m="http://schemas.microsoft.com/office/2004/12/omml"
xmlns="http://www.w3.org/TR/REC-html40">';
    }

    private function saveword()
    {

        echo "</html>";

        $data = ob_get_contents();
        ob_end_clean();

        $this->wirtefile ($this -> filePath,$data);
    }
    
    /**
     * 生成文件，暂时还是先生成文件，然后再下载
     */
    private function wirtefile ($fn,$data)
    {
        $fp=fopen($fn,"wb");
        fwrite($fp,$data);
        fclose($fp);
        $file = fopen($fn,"r"); 
        Header("Content-type: application/octet-stream");
        Header("Accept-Ranges: bytes");
        Header("Accept-Length: ".filesize($fn));
        Header("Content-Disposition: attachment; filename=\"".$this->filename."\"");
        echo fread($file, filesize($fn));
        fclose($file);
        unlink($fn);
    }
    private function wordstruc($order){

         $html = <<<EOD
          <head>
          <meta http-equiv=Content-Type content="text/html; charset=unicode">
          <meta name=ProgId content=Word.Document>
          <meta name=Generator content="Microsoft Word 12">
          <meta name=Originator content="Microsoft Word 12">
          <!--[if !mso]>
          <style>
          v\:* {behavior:url(#default#VML);}
          o\:* {behavior:url(#default#VML);}
          w\:* {behavior:url(#default#VML);}
          .shape {behavior:url(#default#VML);}
          </style>
          <![endif]--><!--[if gte mso 9]><xml>
           <o:DocumentProperties>
            <o:Author>ncuzp</o:Author>
            <o:Template>Normal</o:Template>
            <o:LastAuthor>ncuzp</o:LastAuthor>
            <o:Revision>2</o:Revision>
            <o:TotalTime>14</o:TotalTime>
            <o:Created>2014-12-02T12:47:00Z</o:Created>
            <o:LastSaved>2014-12-02T12:47:00Z</o:LastSaved>
            <o:Pages>2</o:Pages>
            <o:Words>141</o:Words>
            <o:Characters>806</o:Characters>
            <o:Lines>6</o:Lines>
            <o:Paragraphs>1</o:Paragraphs>
            <o:CharactersWithSpaces>946</o:CharactersWithSpaces>
            <o:Version>12.00</o:Version>
           </o:DocumentProperties>
          </xml><![endif]-->
          <!--[if gte mso 9]><xml>
           <w:WordDocument>
            <w:View>Print</w:View>
            <w:TrackMoves>false</w:TrackMoves>
            <w:TrackFormatting/>
            <w:ValidateAgainstSchemas/>
            <w:SaveIfXMLInvalid>false</w:SaveIfXMLInvalid>
            <w:IgnoreMixedContent>false</w:IgnoreMixedContent>
            <w:AlwaysShowPlaceholderText>false</w:AlwaysShowPlaceholderText>
            <w:DoNotPromoteQF/>
            <w:LidThemeOther>EN-US</w:LidThemeOther>
            <w:LidThemeAsian>ZH-CN</w:LidThemeAsian>
            <w:LidThemeComplexScript>X-NONE</w:LidThemeComplexScript>
            <w:Compatibility>
             <w:BreakWrappedTables/>
             <w:SnapToGridInCell/>
             <w:WrapTextWithPunct/>
             <w:UseAsianBreakRules/>
             <w:DontGrowAutofit/>
             <w:SplitPgBreakAndParaMark/>
             <w:DontVertAlignCellWithSp/>
             <w:DontBreakConstrainedForcedTables/>
             <w:DontVertAlignInTxbx/>
             <w:Word11KerningPairs/>
             <w:CachedColBalance/>
             <w:UseFELayout/>
            </w:Compatibility>
            <w:BrowserLevel>MicrosoftInternetExplorer4</w:BrowserLevel>
            <m:mathPr>
             <m:mathFont m:val="Cambria Math"/>
             <m:brkBin m:val="before"/>
             <m:brkBinSub m:val="--"/>
             <m:smallFrac m:val="off"/>
             <m:dispDef/>
             <m:lMargin m:val="0"/>
             <m:rMargin m:val="0"/>
             <m:defJc m:val="centerGroup"/>
             <m:wrapIndent m:val="1440"/>
             <m:intLim m:val="subSup"/>
             <m:naryLim m:val="undOvr"/>
            </m:mathPr></w:WordDocument>
          </xml><![endif]--><!--[if gte mso 9]><xml>
           <w:LatentStyles DefLockedState="false" DefUnhideWhenUsed="true"
            DefSemiHidden="true" DefQFormat="false" DefPriority="99"
            LatentStyleCount="267">
            <w:LsdException Locked="false" Priority="0" SemiHidden="false"
             UnhideWhenUsed="false" QFormat="true" Name="Normal"/>
            <w:LsdException Locked="false" Priority="9" SemiHidden="false"
             UnhideWhenUsed="false" QFormat="true" Name="heading 1"/>
            <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 2"/>
            <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 3"/>
            <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 4"/>
            <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 5"/>
            <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 6"/>
            <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 7"/>
            <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 8"/>
            <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 9"/>
            <w:LsdException Locked="false" Priority="39" Name="toc 1"/>
            <w:LsdException Locked="false" Priority="39" Name="toc 2"/>
            <w:LsdException Locked="false" Priority="39" Name="toc 3"/>
            <w:LsdException Locked="false" Priority="39" Name="toc 4"/>
            <w:LsdException Locked="false" Priority="39" Name="toc 5"/>
            <w:LsdException Locked="false" Priority="39" Name="toc 6"/>
            <w:LsdException Locked="false" Priority="39" Name="toc 7"/>
            <w:LsdException Locked="false" Priority="39" Name="toc 8"/>
            <w:LsdException Locked="false" Priority="39" Name="toc 9"/>
            <w:LsdException Locked="false" Priority="35" QFormat="true" Name="caption"/>
            <w:LsdException Locked="false" Priority="10" SemiHidden="false"
             UnhideWhenUsed="false" QFormat="true" Name="Title"/>
            <w:LsdException Locked="false" Priority="1" Name="Default Paragraph Font"/>
            <w:LsdException Locked="false" Priority="11" SemiHidden="false"
             UnhideWhenUsed="false" QFormat="true" Name="Subtitle"/>
            <w:LsdException Locked="false" Priority="22" SemiHidden="false"
             UnhideWhenUsed="false" QFormat="true" Name="Strong"/>
            <w:LsdException Locked="false" Priority="20" SemiHidden="false"
             UnhideWhenUsed="false" QFormat="true" Name="Emphasis"/>
            <w:LsdException Locked="false" Priority="59" SemiHidden="false"
             UnhideWhenUsed="false" Name="Table Grid"/>
            <w:LsdException Locked="false" UnhideWhenUsed="false" Name="Placeholder Text"/>
            <w:LsdException Locked="false" Priority="1" SemiHidden="false"
             UnhideWhenUsed="false" QFormat="true" Name="No Spacing"/>
            <w:LsdException Locked="false" Priority="60" SemiHidden="false"
             UnhideWhenUsed="false" Name="Light Shading"/>
            <w:LsdException Locked="false" Priority="61" SemiHidden="false"
             UnhideWhenUsed="false" Name="Light List"/>
            <w:LsdException Locked="false" Priority="62" SemiHidden="false"
             UnhideWhenUsed="false" Name="Light Grid"/>
            <w:LsdException Locked="false" Priority="63" SemiHidden="false"
             UnhideWhenUsed="false" Name="Medium Shading 1"/>
            <w:LsdException Locked="false" Priority="64" SemiHidden="false"
             UnhideWhenUsed="false" Name="Medium Shading 2"/>
            <w:LsdException Locked="false" Priority="65" SemiHidden="false"
             UnhideWhenUsed="false" Name="Medium List 1"/>
            <w:LsdException Locked="false" Priority="66" SemiHidden="false"
             UnhideWhenUsed="false" Name="Medium List 2"/>
            <w:LsdException Locked="false" Priority="67" SemiHidden="false"
             UnhideWhenUsed="false" Name="Medium Grid 1"/>
            <w:LsdException Locked="false" Priority="68" SemiHidden="false"
             UnhideWhenUsed="false" Name="Medium Grid 2"/>
            <w:LsdException Locked="false" Priority="69" SemiHidden="false"
             UnhideWhenUsed="false" Name="Medium Grid 3"/>
            <w:LsdException Locked="false" Priority="70" SemiHidden="false"
             UnhideWhenUsed="false" Name="Dark List"/>
            <w:LsdException Locked="false" Priority="71" SemiHidden="false"
             UnhideWhenUsed="false" Name="Colorful Shading"/>
            <w:LsdException Locked="false" Priority="72" SemiHidden="false"
             UnhideWhenUsed="false" Name="Colorful List"/>
            <w:LsdException Locked="false" Priority="73" SemiHidden="false"
             UnhideWhenUsed="false" Name="Colorful Grid"/>
            <w:LsdException Locked="false" Priority="60" SemiHidden="false"
             UnhideWhenUsed="false" Name="Light Shading Accent 1"/>
            <w:LsdException Locked="false" Priority="61" SemiHidden="false"
             UnhideWhenUsed="false" Name="Light List Accent 1"/>
            <w:LsdException Locked="false" Priority="62" SemiHidden="false"
             UnhideWhenUsed="false" Name="Light Grid Accent 1"/>
            <w:LsdException Locked="false" Priority="63" SemiHidden="false"
             UnhideWhenUsed="false" Name="Medium Shading 1 Accent 1"/>
            <w:LsdException Locked="false" Priority="64" SemiHidden="false"
             UnhideWhenUsed="false" Name="Medium Shading 2 Accent 1"/>
            <w:LsdException Locked="false" Priority="65" SemiHidden="false"
             UnhideWhenUsed="false" Name="Medium List 1 Accent 1"/>
            <w:LsdException Locked="false" UnhideWhenUsed="false" Name="Revision"/>
            <w:LsdException Locked="false" Priority="34" SemiHidden="false"
             UnhideWhenUsed="false" QFormat="true" Name="List Paragraph"/>
            <w:LsdException Locked="false" Priority="29" SemiHidden="false"
             UnhideWhenUsed="false" QFormat="true" Name="Quote"/>
            <w:LsdException Locked="false" Priority="30" SemiHidden="false"
             UnhideWhenUsed="false" QFormat="true" Name="Intense Quote"/>
            <w:LsdException Locked="false" Priority="66" SemiHidden="false"
             UnhideWhenUsed="false" Name="Medium List 2 Accent 1"/>
            <w:LsdException Locked="false" Priority="67" SemiHidden="false"
             UnhideWhenUsed="false" Name="Medium Grid 1 Accent 1"/>
            <w:LsdException Locked="false" Priority="68" SemiHidden="false"
             UnhideWhenUsed="false" Name="Medium Grid 2 Accent 1"/>
            <w:LsdException Locked="false" Priority="69" SemiHidden="false"
             UnhideWhenUsed="false" Name="Medium Grid 3 Accent 1"/>
            <w:LsdException Locked="false" Priority="70" SemiHidden="false"
             UnhideWhenUsed="false" Name="Dark List Accent 1"/>
            <w:LsdException Locked="false" Priority="71" SemiHidden="false"
             UnhideWhenUsed="false" Name="Colorful Shading Accent 1"/>
            <w:LsdException Locked="false" Priority="72" SemiHidden="false"
             UnhideWhenUsed="false" Name="Colorful List Accent 1"/>
            <w:LsdException Locked="false" Priority="73" SemiHidden="false"
             UnhideWhenUsed="false" Name="Colorful Grid Accent 1"/>
            <w:LsdException Locked="false" Priority="60" SemiHidden="false"
             UnhideWhenUsed="false" Name="Light Shading Accent 2"/>
            <w:LsdException Locked="false" Priority="61" SemiHidden="false"
             UnhideWhenUsed="false" Name="Light List Accent 2"/>
            <w:LsdException Locked="false" Priority="62" SemiHidden="false"
             UnhideWhenUsed="false" Name="Light Grid Accent 2"/>
            <w:LsdException Locked="false" Priority="63" SemiHidden="false"
             UnhideWhenUsed="false" Name="Medium Shading 1 Accent 2"/>
            <w:LsdException Locked="false" Priority="64" SemiHidden="false"
             UnhideWhenUsed="false" Name="Medium Shading 2 Accent 2"/>
            <w:LsdException Locked="false" Priority="65" SemiHidden="false"
             UnhideWhenUsed="false" Name="Medium List 1 Accent 2"/>
            <w:LsdException Locked="false" Priority="66" SemiHidden="false"
             UnhideWhenUsed="false" Name="Medium List 2 Accent 2"/>
            <w:LsdException Locked="false" Priority="67" SemiHidden="false"
             UnhideWhenUsed="false" Name="Medium Grid 1 Accent 2"/>
            <w:LsdException Locked="false" Priority="68" SemiHidden="false"
             UnhideWhenUsed="false" Name="Medium Grid 2 Accent 2"/>
            <w:LsdException Locked="false" Priority="69" SemiHidden="false"
             UnhideWhenUsed="false" Name="Medium Grid 3 Accent 2"/>
            <w:LsdException Locked="false" Priority="70" SemiHidden="false"
             UnhideWhenUsed="false" Name="Dark List Accent 2"/>
            <w:LsdException Locked="false" Priority="71" SemiHidden="false"
             UnhideWhenUsed="false" Name="Colorful Shading Accent 2"/>
            <w:LsdException Locked="false" Priority="72" SemiHidden="false"
             UnhideWhenUsed="false" Name="Colorful List Accent 2"/>
            <w:LsdException Locked="false" Priority="73" SemiHidden="false"
             UnhideWhenUsed="false" Name="Colorful Grid Accent 2"/>
            <w:LsdException Locked="false" Priority="60" SemiHidden="false"
             UnhideWhenUsed="false" Name="Light Shading Accent 3"/>
            <w:LsdException Locked="false" Priority="61" SemiHidden="false"
             UnhideWhenUsed="false" Name="Light List Accent 3"/>
            <w:LsdException Locked="false" Priority="62" SemiHidden="false"
             UnhideWhenUsed="false" Name="Light Grid Accent 3"/>
            <w:LsdException Locked="false" Priority="63" SemiHidden="false"
             UnhideWhenUsed="false" Name="Medium Shading 1 Accent 3"/>
            <w:LsdException Locked="false" Priority="64" SemiHidden="false"
             UnhideWhenUsed="false" Name="Medium Shading 2 Accent 3"/>
            <w:LsdException Locked="false" Priority="65" SemiHidden="false"
             UnhideWhenUsed="false" Name="Medium List 1 Accent 3"/>
            <w:LsdException Locked="false" Priority="66" SemiHidden="false"
             UnhideWhenUsed="false" Name="Medium List 2 Accent 3"/>
            <w:LsdException Locked="false" Priority="67" SemiHidden="false"
             UnhideWhenUsed="false" Name="Medium Grid 1 Accent 3"/>
            <w:LsdException Locked="false" Priority="68" SemiHidden="false"
             UnhideWhenUsed="false" Name="Medium Grid 2 Accent 3"/>
            <w:LsdException Locked="false" Priority="69" SemiHidden="false"
             UnhideWhenUsed="false" Name="Medium Grid 3 Accent 3"/>
            <w:LsdException Locked="false" Priority="70" SemiHidden="false"
             UnhideWhenUsed="false" Name="Dark List Accent 3"/>
            <w:LsdException Locked="false" Priority="71" SemiHidden="false"
             UnhideWhenUsed="false" Name="Colorful Shading Accent 3"/>
            <w:LsdException Locked="false" Priority="72" SemiHidden="false"
             UnhideWhenUsed="false" Name="Colorful List Accent 3"/>
            <w:LsdException Locked="false" Priority="73" SemiHidden="false"
             UnhideWhenUsed="false" Name="Colorful Grid Accent 3"/>
            <w:LsdException Locked="false" Priority="60" SemiHidden="false"
             UnhideWhenUsed="false" Name="Light Shading Accent 4"/>
            <w:LsdException Locked="false" Priority="61" SemiHidden="false"
             UnhideWhenUsed="false" Name="Light List Accent 4"/>
            <w:LsdException Locked="false" Priority="62" SemiHidden="false"
             UnhideWhenUsed="false" Name="Light Grid Accent 4"/>
            <w:LsdException Locked="false" Priority="63" SemiHidden="false"
             UnhideWhenUsed="false" Name="Medium Shading 1 Accent 4"/>
            <w:LsdException Locked="false" Priority="64" SemiHidden="false"
             UnhideWhenUsed="false" Name="Medium Shading 2 Accent 4"/>
            <w:LsdException Locked="false" Priority="65" SemiHidden="false"
             UnhideWhenUsed="false" Name="Medium List 1 Accent 4"/>
            <w:LsdException Locked="false" Priority="66" SemiHidden="false"
             UnhideWhenUsed="false" Name="Medium List 2 Accent 4"/>
            <w:LsdException Locked="false" Priority="67" SemiHidden="false"
             UnhideWhenUsed="false" Name="Medium Grid 1 Accent 4"/>
            <w:LsdException Locked="false" Priority="68" SemiHidden="false"
             UnhideWhenUsed="false" Name="Medium Grid 2 Accent 4"/>
            <w:LsdException Locked="false" Priority="69" SemiHidden="false"
             UnhideWhenUsed="false" Name="Medium Grid 3 Accent 4"/>
            <w:LsdException Locked="false" Priority="70" SemiHidden="false"
             UnhideWhenUsed="false" Name="Dark List Accent 4"/>
            <w:LsdException Locked="false" Priority="71" SemiHidden="false"
             UnhideWhenUsed="false" Name="Colorful Shading Accent 4"/>
            <w:LsdException Locked="false" Priority="72" SemiHidden="false"
             UnhideWhenUsed="false" Name="Colorful List Accent 4"/>
            <w:LsdException Locked="false" Priority="73" SemiHidden="false"
             UnhideWhenUsed="false" Name="Colorful Grid Accent 4"/>
            <w:LsdException Locked="false" Priority="60" SemiHidden="false"
             UnhideWhenUsed="false" Name="Light Shading Accent 5"/>
            <w:LsdException Locked="false" Priority="61" SemiHidden="false"
             UnhideWhenUsed="false" Name="Light List Accent 5"/>
            <w:LsdException Locked="false" Priority="62" SemiHidden="false"
             UnhideWhenUsed="false" Name="Light Grid Accent 5"/>
            <w:LsdException Locked="false" Priority="63" SemiHidden="false"
             UnhideWhenUsed="false" Name="Medium Shading 1 Accent 5"/>
            <w:LsdException Locked="false" Priority="64" SemiHidden="false"
             UnhideWhenUsed="false" Name="Medium Shading 2 Accent 5"/>
            <w:LsdException Locked="false" Priority="65" SemiHidden="false"
             UnhideWhenUsed="false" Name="Medium List 1 Accent 5"/>
            <w:LsdException Locked="false" Priority="66" SemiHidden="false"
             UnhideWhenUsed="false" Name="Medium List 2 Accent 5"/>
            <w:LsdException Locked="false" Priority="67" SemiHidden="false"
             UnhideWhenUsed="false" Name="Medium Grid 1 Accent 5"/>
            <w:LsdException Locked="false" Priority="68" SemiHidden="false"
             UnhideWhenUsed="false" Name="Medium Grid 2 Accent 5"/>
            <w:LsdException Locked="false" Priority="69" SemiHidden="false"
             UnhideWhenUsed="false" Name="Medium Grid 3 Accent 5"/>
            <w:LsdException Locked="false" Priority="70" SemiHidden="false"
             UnhideWhenUsed="false" Name="Dark List Accent 5"/>
            <w:LsdException Locked="false" Priority="71" SemiHidden="false"
             UnhideWhenUsed="false" Name="Colorful Shading Accent 5"/>
            <w:LsdException Locked="false" Priority="72" SemiHidden="false"
             UnhideWhenUsed="false" Name="Colorful List Accent 5"/>
            <w:LsdException Locked="false" Priority="73" SemiHidden="false"
             UnhideWhenUsed="false" Name="Colorful Grid Accent 5"/>
            <w:LsdException Locked="false" Priority="60" SemiHidden="false"
             UnhideWhenUsed="false" Name="Light Shading Accent 6"/>
            <w:LsdException Locked="false" Priority="61" SemiHidden="false"
             UnhideWhenUsed="false" Name="Light List Accent 6"/>
            <w:LsdException Locked="false" Priority="62" SemiHidden="false"
             UnhideWhenUsed="false" Name="Light Grid Accent 6"/>
            <w:LsdException Locked="false" Priority="63" SemiHidden="false"
             UnhideWhenUsed="false" Name="Medium Shading 1 Accent 6"/>
            <w:LsdException Locked="false" Priority="64" SemiHidden="false"
             UnhideWhenUsed="false" Name="Medium Shading 2 Accent 6"/>
            <w:LsdException Locked="false" Priority="65" SemiHidden="false"
             UnhideWhenUsed="false" Name="Medium List 1 Accent 6"/>
            <w:LsdException Locked="false" Priority="66" SemiHidden="false"
             UnhideWhenUsed="false" Name="Medium List 2 Accent 6"/>
            <w:LsdException Locked="false" Priority="67" SemiHidden="false"
             UnhideWhenUsed="false" Name="Medium Grid 1 Accent 6"/>
            <w:LsdException Locked="false" Priority="68" SemiHidden="false"
             UnhideWhenUsed="false" Name="Medium Grid 2 Accent 6"/>
            <w:LsdException Locked="false" Priority="69" SemiHidden="false"
             UnhideWhenUsed="false" Name="Medium Grid 3 Accent 6"/>
            <w:LsdException Locked="false" Priority="70" SemiHidden="false"
             UnhideWhenUsed="false" Name="Dark List Accent 6"/>
            <w:LsdException Locked="false" Priority="71" SemiHidden="false"
             UnhideWhenUsed="false" Name="Colorful Shading Accent 6"/>
            <w:LsdException Locked="false" Priority="72" SemiHidden="false"
             UnhideWhenUsed="false" Name="Colorful List Accent 6"/>
            <w:LsdException Locked="false" Priority="73" SemiHidden="false"
             UnhideWhenUsed="false" Name="Colorful Grid Accent 6"/>
            <w:LsdException Locked="false" Priority="19" SemiHidden="false"
             UnhideWhenUsed="false" QFormat="true" Name="Subtle Emphasis"/>
            <w:LsdException Locked="false" Priority="21" SemiHidden="false"
             UnhideWhenUsed="false" QFormat="true" Name="Intense Emphasis"/>
            <w:LsdException Locked="false" Priority="31" SemiHidden="false"
             UnhideWhenUsed="false" QFormat="true" Name="Subtle Reference"/>
            <w:LsdException Locked="false" Priority="32" SemiHidden="false"
             UnhideWhenUsed="false" QFormat="true" Name="Intense Reference"/>
            <w:LsdException Locked="false" Priority="33" SemiHidden="false"
             UnhideWhenUsed="false" QFormat="true" Name="Book Title"/>
            <w:LsdException Locked="false" Priority="37" Name="Bibliography"/>
            <w:LsdException Locked="false" Priority="39" QFormat="true" Name="TOC Heading"/>
           </w:LatentStyles>
          </xml><![endif]-->
          <style>
          <!--
           /* Font Definitions */
           @font-face
              {font-family:宋体;
              panose-1:2 1 6 0 3 1 1 1 1 1;
              mso-font-alt:SimSun;
              mso-font-charset:134;
              mso-generic-font-family:auto;
              mso-font-pitch:variable;
              mso-font-signature:3 680460288 22 0 262145 0;}
          @font-face
              {font-family:"Cambria Math";
              panose-1:2 4 5 3 5 4 6 3 2 4;
              mso-font-charset:1;
              mso-generic-font-family:roman;
              mso-font-format:other;
              mso-font-pitch:variable;
              mso-font-signature:0 0 0 0 0 0;}
          @font-face
              {font-family:"\@宋体";
              panose-1:2 1 6 0 3 1 1 1 1 1;
              mso-font-charset:134;
              mso-generic-font-family:auto;
              mso-font-pitch:variable;
              mso-font-signature:3 680460288 22 0 262145 0;}
           /* Style Definitions */
           p.MsoNormal, li.MsoNormal, div.MsoNormal
              {mso-style-unhide:no;
              mso-style-qformat:yes;
              mso-style-parent:"";
              margin:0cm;
              margin-bottom:.0001pt;
              mso-pagination:widow-orphan;
              font-size:12.0pt;
              font-family:宋体;
              mso-bidi-font-family:宋体;}
          p.MsoHeader, li.MsoHeader, div.MsoHeader
              {mso-style-noshow:yes;
              mso-style-priority:99;
              mso-style-link:"页眉 Char";
              margin:0cm;
              margin-bottom:.0001pt;
              text-align:center;
              mso-pagination:widow-orphan;
              tab-stops:center 207.65pt right 415.3pt;
              layout-grid-mode:char;
              border:none;
              mso-border-bottom-alt:solid windowtext .75pt;
              padding:0cm;
              mso-padding-alt:0cm 0cm 1.0pt 0cm;
              font-size:9.0pt;
              font-family:宋体;
              mso-bidi-font-family:宋体;}
          p.MsoFooter, li.MsoFooter, div.MsoFooter
              {mso-style-noshow:yes;
              mso-style-priority:99;
              mso-style-link:"页脚 Char";
              margin:0cm;
              margin-bottom:.0001pt;
              mso-pagination:widow-orphan;
              tab-stops:center 207.65pt right 415.3pt;
              layout-grid-mode:char;
              font-size:9.0pt;
              font-family:宋体;
              mso-bidi-font-family:宋体;}
          p
              {mso-style-priority:99;
              mso-margin-top-alt:auto;
              margin-right:0cm;
              mso-margin-bottom-alt:auto;
              margin-left:0cm;
              mso-pagination:widow-orphan;
              font-size:12.0pt;
              font-family:宋体;
              mso-bidi-font-family:宋体;}
          p.MsoAcetate, li.MsoAcetate, div.MsoAcetate
              {mso-style-noshow:yes;
              mso-style-priority:99;
              mso-style-link:"批注框文本 Char";
              margin:0cm;
              margin-bottom:.0001pt;
              mso-pagination:widow-orphan;
              font-size:9.0pt;
              font-family:宋体;
              mso-bidi-font-family:宋体;}
          span.Char
              {mso-style-name:"批注框文本 Char";
              mso-style-noshow:yes;
              mso-style-priority:99;
              mso-style-unhide:no;
              mso-style-locked:yes;
              mso-style-link:批注框文本;
              mso-ansi-font-size:9.0pt;
              mso-bidi-font-size:9.0pt;
              font-family:宋体;
              mso-ascii-font-family:宋体;
              mso-fareast-font-family:宋体;
              mso-hansi-font-family:宋体;
              mso-bidi-font-family:宋体;}
          span.Char0
              {mso-style-name:"页眉 Char";
              mso-style-noshow:yes;
              mso-style-priority:99;
              mso-style-unhide:no;
              mso-style-locked:yes;
              mso-style-link:页眉;
              mso-ansi-font-size:9.0pt;
              mso-bidi-font-size:9.0pt;
              font-family:宋体;
              mso-ascii-font-family:宋体;
              mso-fareast-font-family:宋体;
              mso-hansi-font-family:宋体;
              mso-bidi-font-family:宋体;}
          span.Char1
              {mso-style-name:"页脚 Char";
              mso-style-noshow:yes;
              mso-style-priority:99;
              mso-style-unhide:no;
              mso-style-locked:yes;
              mso-style-link:页脚;
              mso-ansi-font-size:9.0pt;
              mso-bidi-font-size:9.0pt;
              font-family:宋体;
              mso-ascii-font-family:宋体;
              mso-fareast-font-family:宋体;
              mso-hansi-font-family:宋体;
              mso-bidi-font-family:宋体;}
          .MsoChpDefault
              {mso-style-type:export-only;
              mso-default-props:yes;
              font-size:10.0pt;
              mso-ansi-font-size:10.0pt;
              mso-bidi-font-size:10.0pt;
              mso-ascii-font-family:"Times New Roman";
              mso-hansi-font-family:"Times New Roman";
              mso-font-kerning:0pt;}
           /* Page Definitions */
          @page Section1
              {size:595.3pt 841.9pt;
              margin:72.0pt 90.0pt 72.0pt 90.0pt;
              mso-header-margin:42.55pt;
              mso-footer-margin:49.6pt;
              mso-paper-source:0;}
          div.Section1
              {page:Section1;}
          -->
          </style>
          <!--[if gte mso 10]>
          <style>
           /* Style Definitions */
           table.MsoNormalTable
              {mso-style-name:普通表格;
              mso-tstyle-rowband-size:0;
              mso-tstyle-colband-size:0;
              mso-style-noshow:yes;
              mso-style-priority:99;
              mso-style-qformat:yes;
              mso-style-parent:"";
              mso-padding-alt:0cm 5.4pt 0cm 5.4pt;
              mso-para-margin:0cm;
              mso-para-margin-bottom:.0001pt;
              mso-pagination:widow-orphan;
              font-size:10.0pt;
              font-family:"Times New Roman","serif";}
          </style>
          <![endif]--><!--[if gte mso 9]><xml>
           <o:shapedefaults v:ext="edit" spidmax="3074"/>
          </xml><![endif]--><!--[if gte mso 9]><xml>
           <o:shapelayout v:ext="edit">
            <o:idmap v:ext="edit" data="2"/>
           </o:shapelayout></xml><![endif]-->
          </head>

          <body lang=ZH-CN style='tab-interval:21.0pt'>

          <div class=Section1>

          <table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width=614
           style='margin-left:-21.3pt;border-collapse:collapse;mso-table-layout-alt:fixed;
           mso-yfti-tbllook:1184;mso-padding-alt:0cm 0cm 0cm 0cm'>
           <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:8.2pt;mso-row-margin-right:
            434.05pt'>
            <td width=18 style='width:13.4pt;padding:0cm 0cm 0cm 0cm;height:8.2pt'>
            <p class=MsoNormal><!--[if gte vml 1]><v:shapetype id="_x0000_t75"
             coordsize="21600,21600" o:spt="75" o:preferrelative="t" path="m@4@5l@4@11@9@11@9@5xe"
             filled="f" stroked="f">
             <v:stroke joinstyle="miter"/>
             <v:formulas>
              <v:f eqn="if lineDrawn pixelLineWidth 0"/>
              <v:f eqn="sum @0 1 0"/>
              <v:f eqn="sum 0 0 @1"/>
              <v:f eqn="prod @2 1 2"/>
              <v:f eqn="prod @3 21600 pixelWidth"/>
              <v:f eqn="prod @3 21600 pixelHeight"/>
              <v:f eqn="sum @0 0 1"/>
              <v:f eqn="prod @6 1 2"/>
              <v:f eqn="prod @7 21600 pixelWidth"/>
              <v:f eqn="sum @8 21600 0"/>
              <v:f eqn="prod @7 21600 pixelHeight"/>
              <v:f eqn="sum @10 21600 0"/>
             </v:formulas>
             <v:path o:extrusionok="f" gradientshapeok="t" o:connecttype="rect"/>
             <o:lock v:ext="edit" aspectratio="t"/>
            </v:shapetype><v:shape id="图片_x0020_2" o:spid="_x0000_s2050" type="#_x0000_t75"
             alt="Penguins.jpg" style='position:absolute;margin-left:.75pt;margin-top:6.4pt;
             width:82.5pt;height:33.75pt;z-index:1;visibility:visible;mso-wrap-style:square;
             mso-wrap-distance-left:9pt;mso-wrap-distance-top:0;
             mso-wrap-distance-right:9pt;mso-wrap-distance-bottom:0;
             mso-position-horizontal:absolute;mso-position-horizontal-relative:text;
             mso-position-vertical:absolute;mso-position-vertical-relative:text'>
            </v:shape><![endif]--><![if !vml]><span style='mso-ignore:vglayout;
            position:absolute;z-index:1;margin-left:1px;margin-top:9px;width:110px;
            height:45px'><img width=110 height=45 src="2.jpg"
            alt=Penguins.jpg v:shapes="图片_x0020_2"></span><![endif]><span lang=EN-US><o:p></o:p></span></p>
            </td>
            <td width=18 style='width:13.3pt;padding:6.0pt 0cm 0cm 0cm;height:8.2pt;
            position:absolute'></td>
            <td style='mso-cell-special:placeholder;border:none;border-bottom:solid windowtext 1.5pt;
            padding:0cm 0cm 0cm 0cm' width=579 colspan=33><p class='MsoNormal'>&nbsp;</td>
           </tr>
           <tr style='mso-yfti-irow:1;height:34.15pt'>
            <td width=614 colspan=35 style='width:460.75pt;border:solid windowtext 1.5pt;
            border-bottom:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.15pt'>
            <p style='text-indent:84.0pt;mso-char-indent-count:7.0;text-autospace:ideograph-other'>帝峰班服内部流程订单<span
            lang=EN-US>[</span>{$order->area}<span lang=EN-US>] </span>生成编号<span lang=EN-US>: {$order->produce_no}</span></p>
            </td>
           </tr>
           <tr style='mso-yfti-irow:2;height:13.1pt'>
            <td width=66 colspan=3 rowspan=2 style='width:49.65pt;border-top:none;
            border-left:solid windowtext 1.5pt;border-bottom:solid windowtext 1.0pt;
            border-right:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext 1.5pt;
            padding:0cm 5.4pt 0cm 5.4pt;height:13.1pt'>
            <p align=center style='text-align:center'><b><span lang=EN-US
            style='font-size:9.0pt'><span style='mso-spacerun:yes'> </span></span></b><b><span
            style='font-size:9.0pt'>班长</span></b></p>
            </td>
            <td width=66 colspan=4 rowspan=2 style='width:49.75pt;border-top:none;
            border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
            mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.0pt;
            padding:0cm 5.4pt 0cm 5.4pt;height:13.1pt'>
            <p style='text-autospace:ideograph-other'><span lang=EN-US style='font-size:
            9.0pt'>{$order->cust_name}</span></p>
            </td>
            <td width=66 colspan=4 rowspan=2 style='width:49.65pt;border-top:none;
            border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
            mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.0pt;
            padding:0cm 5.4pt 0cm 5.4pt;height:13.1pt'>
            <p align=center style='text-align:center;text-autospace:ideograph-other'><b><span
            style='font-size:9.0pt'>单位</span></b></p>
            <p align=center style='text-align:center;text-autospace:ideograph-other'><b><span
            lang=EN-US style='font-size:9.0pt'>(</span></b><b><span style='font-size:
            9.0pt'>班级<span lang=EN-US>)</span></span></b></p>
            </td>
            <td width=113 colspan=10 rowspan=2 style='width:3.0cm;border-top:none;
            border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
            mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.0pt;
            padding:0cm 5.4pt 0cm 5.4pt;height:13.1pt'>
            <p align=center style='text-align:center;text-autospace:ideograph-other'><span
            lang=EN-US style='font-size:9.0pt'>{$order->unit}<o:p></o:p></span></p>
            </td>
            <td width=52 colspan=3 rowspan=2 style='width:39.05pt;border-top:none;
            border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
            mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.0pt;
            padding:0cm 5.4pt 0cm 5.4pt;height:13.1pt'>
            <p align=center style='text-align:center;text-autospace:ideograph-other'><b><span
            style='font-size:9.0pt'>联系</span></b></p>
            <p align=center style='text-align:center;text-autospace:ideograph-other'><b><span
            style='font-size:9.0pt'>方式</span></b></p>
            </td>
            <td width=52 colspan=3 style='width:39.1pt;border-top:none;border-left:none;
            border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
            mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.0pt;
            padding:0cm 5.4pt 0cm 5.4pt;height:13.1pt'>
            <p align=center style='text-align:center;text-autospace:ideograph-other'><span
            lang=EN-US style='font-size:9.0pt'>Tel</span><span style='font-size:9.0pt'>：</span></p>
            </td>
            <td width=198 colspan=8 style='width:148.5pt;border-top:none;border-left:
            none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
            mso-border-top-alt:solid windowtext 1.5pt;mso-border-left-alt:solid windowtext 1.0pt;
            padding:0cm 5.4pt 0cm 5.4pt;height:13.1pt'>
            <p style='text-autospace:ideograph-other'><span lang=EN-US style='font-size:
            9.0pt'>{$order->tel}</span></p>
            </td>
           </tr>
           <tr style='mso-yfti-irow:3;height:13.1pt'>
            <td width=52 colspan=3 style='width:39.1pt;border-top:none;border-left:none;
            border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
            mso-border-top-alt:inset windowtext .75pt;mso-border-left-alt:inset windowtext .75pt;
            padding:0cm 5.4pt 0cm 5.4pt;height:13.1pt'>
            <p align=center style='text-align:center;text-autospace:ideograph-other'><span
            lang=EN-US style='font-size:9.0pt'>Q Q</span><span style='font-size:9.0pt'>：</span></p>
            </td>
            <td width=198 colspan=8 style='width:148.5pt;border-top:none;border-left:
            none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
            mso-border-top-alt:inset windowtext .75pt;padding:0cm 5.4pt 0cm 5.4pt;
            height:13.1pt'>
            <p style='text-autospace:ideograph-other'><span lang=EN-US>{$order->qq}</span></p>
            </td>
           </tr>
           <tr style='mso-yfti-irow:4;height:26.95pt'>
            <td width=66 colspan=3 style='width:49.65pt;border-top:none;border-left:solid windowtext 1.5pt;
            border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
            mso-border-top-alt:inset windowtext .75pt;padding:0cm 5.4pt 0cm 5.4pt;
            height:26.95pt'>
            <p align=center style='text-align:center'><b><span style='font-size:9.0pt'>选定款式</span></b></p>
            </td>
            <td width=298 colspan=21 style='width:223.5pt;border-top:none;border-left:
            none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
            mso-border-top-alt:inset windowtext .75pt;padding:0cm 5.4pt 0cm 5.4pt;
            height:26.95pt'>
            <p style='text-autospace:ideograph-other'><span lang=EN-US style='font-size:
            9.0pt;color:red'>{$order->style}</span>【<span
            lang=EN-US>{$order->color}</span>】</span></p>
            </td>
            <td width=52 colspan=3 style='width:39.1pt;border-top:none;border-left:none;
            border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
            mso-border-top-alt:inset windowtext .75pt;mso-border-left-alt:inset windowtext .75pt;
            padding:0cm 5.4pt 0cm 5.4pt;height:26.95pt'>
            <p align=center style='text-align:center;text-autospace:ideograph-other'><span
            style='font-size:9.0pt'>例</span></p>
            </td>
            <td width=198 colspan=8 style='width:148.5pt;border-top:none;border-left:
            none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
            mso-border-top-alt:inset windowtext .75pt;padding:0cm 5.4pt 0cm 5.4pt;
            height:26.95pt'>
            <p align=center style='text-align:center;text-autospace:ideograph-other'><span
            lang=EN-US style='font-size:9.0pt'>&nbsp;</span></p>
            </td>
           </tr>
           <tr style='mso-yfti-irow:5;height:5.4pt'>
            <td width=66 colspan=3 rowspan=5 style='width:49.65pt;border-top:none;
            border-left:solid windowtext 1.5pt;border-bottom:solid windowtext 1.0pt;
            border-right:solid windowtext 1.0pt;mso-border-top-alt:inset windowtext .75pt;
            padding:0cm 5.4pt 0cm 5.4pt;height:5.4pt'>
            <p align=center style='text-align:center;mso-line-height-alt:5.4pt'><b><span
            style='font-size:9.0pt'>常规品名</span></b></p>
            </td>
            <td width=66 colspan=4 style='width:49.75pt;border-top:none;border-left:none;
            border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
            mso-border-top-alt:inset windowtext .75pt;padding:0cm 5.4pt 0cm 5.4pt;
            height:5.4pt'>
            <p align=center style='text-align:center;mso-line-height-alt:5.4pt'><span
            style='font-size:9.0pt'>帝峰衫国生态棉纯色短袖</span></p>
            </td>
            <td width=142 colspan=10 style='width:106.35pt;border-top:none;border-left:
            none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
            mso-border-top-alt:inset windowtext .75pt;padding:0cm 5.4pt 0cm 5.4pt;
            height:5.4pt'>
            <p align=center style='text-align:center;mso-line-height-alt:5.4pt'><span
            style='font-size:9.0pt'>精梳棉健康纯色短袖</span></p>
            </td>
            <td width=142 colspan=10 style='width:106.5pt;border-top:none;border-left:
            none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
            mso-border-top-alt:inset windowtext .75pt;padding:0cm 5.4pt 0cm 5.4pt;
            height:5.4pt'>
            <p align=center style='text-align:center;mso-line-height-alt:5.4pt'><span
            style='font-size:9.0pt'>精梳棉健康插袖短袖</span></p>
            </td>
            <td width=198 colspan=8 style='width:148.5pt;border-top:none;border-left:
            none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
            mso-border-top-alt:inset windowtext .75pt;padding:0cm 5.4pt 0cm 5.4pt;
            height:5.4pt'>
            <p align=center style='text-align:center;mso-line-height-alt:5.4pt'><span
            style='font-size:9.0pt'>精梳棉健康撞边短袖</span></p>
            </td>
           </tr>
           <tr style='mso-yfti-irow:6;height:5.4pt'>
            <td width=66 colspan=4 style='width:49.75pt;border-top:none;border-left:none;
            border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
            mso-border-top-alt:inset windowtext .75pt;padding:0cm 5.4pt 0cm 5.4pt;
            height:5.4pt'>
            <p align=center style='text-align:center;mso-line-height-alt:5.4pt'><span
            style='font-size:9.0pt'>精梳棉健康纯色长袖</span></p>
            </td>
            <td width=142 colspan=10 style='width:106.35pt;border-top:none;border-left:
            none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
            mso-border-top-alt:inset windowtext .75pt;padding:0cm 5.4pt 0cm 5.4pt;
            height:5.4pt'>
            <p align=center style='text-align:center;mso-line-height-alt:5.4pt'><span
            style='font-size:9.0pt'>精梳棉健康插袖长袖</span></p>
            </td>
            <td width=142 colspan=10 style='width:106.5pt;border-top:none;border-left:
            none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
            mso-border-top-alt:inset windowtext .75pt;padding:0cm 5.4pt 0cm 5.4pt;
            height:5.4pt'>
            <p align=center style='text-align:center;mso-line-height-alt:5.4pt'><span
            style='font-size:9.0pt'>精梳棉插袖套头卫衣</span></p>
            </td>
            <td width=198 colspan=8 style='width:148.5pt;border-top:none;border-left:
            none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
            mso-border-top-alt:inset windowtext .75pt;padding:0cm 5.4pt 0cm 5.4pt;
            height:5.4pt'>
            <p align=center style='text-align:center;mso-line-height-alt:5.4pt'><span
            style='font-size:9.0pt'>精棉套头卫衣</span></p>
            </td>
           </tr>
           <tr style='mso-yfti-irow:7;height:5.4pt'>
            <td width=66 colspan=4 style='width:49.75pt;border-top:none;border-left:none;
            border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
            mso-border-top-alt:inset windowtext .75pt;padding:0cm 5.4pt 0cm 5.4pt;
            height:5.4pt'>
            <p align=center style='text-align:center;mso-line-height-alt:5.4pt'><span
            style='font-size:9.0pt'>精棉加绒加厚拉链卫衣</span></p>
            </td>
            <td width=142 colspan=10 style='width:106.35pt;border-top:none;border-left:
            none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
            mso-border-top-alt:inset windowtext .75pt;padding:0cm 5.4pt 0cm 5.4pt;
            height:5.4pt'>
            <p align=center style='text-align:center;mso-line-height-alt:5.4pt'><span
            style='font-size:9.0pt'>精棉加绒加厚撞色卫衣</span></p>
            </td>
            <td width=142 colspan=10 style='width:106.5pt;border-top:none;border-left:
            none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
            mso-border-top-alt:inset windowtext .75pt;padding:0cm 5.4pt 0cm 5.4pt;
            height:5.4pt'>
            <p align=center style='text-align:center;mso-line-height-alt:5.4pt'><span
            style='font-size:9.0pt'>精棉短裤</span></p>
            </td>
            <td width=198 colspan=8 style='width:148.5pt;border-top:none;border-left:
            none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
            mso-border-top-alt:inset windowtext .75pt;padding:0cm 5.4pt 0cm 5.4pt;
            height:5.4pt'>
            <p align=center style='text-align:center;mso-line-height-alt:5.4pt'><span
            style='font-size:9.0pt'>精梳棉爆款卫裤</span></p>
            </td>
           </tr>
           <tr style='mso-yfti-irow:8;height:5.4pt'>
            <td width=66 colspan=4 style='width:49.75pt;border-top:none;border-left:none;
            border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
            mso-border-top-alt:inset windowtext .75pt;padding:0cm 5.4pt 0cm 5.4pt;
            height:5.4pt'>
            <p align=center style='text-align:center;mso-line-height-alt:5.4pt'><span
            style='font-size:9.0pt'>新款不倒绒棒球服</span></p>
            </td>
            <td width=142 colspan=10 style='width:106.35pt;border-top:none;border-left:
            none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
            mso-border-top-alt:inset windowtext .75pt;padding:0cm 5.4pt 0cm 5.4pt;
            height:5.4pt'>
            <p align=center style='text-align:center;mso-line-height-alt:5.4pt'><span
            style='font-size:9.0pt'>新款不倒绒棒球裤</span></p>
            </td>
            <td width=142 colspan=10 style='width:106.5pt;border-top:none;border-left:
            none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
            mso-border-top-alt:inset windowtext .75pt;padding:0cm 5.4pt 0cm 5.4pt;
            height:5.4pt'>
            <p align=center style='text-align:center;mso-line-height-alt:5.4pt'><span
            style='font-size:9.0pt'>精棉翻领<span lang=EN-US>POLO</span></span></p>
            </td>
            <td width=198 colspan=8 style='width:148.5pt;border-top:none;border-left:
            none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
            mso-border-top-alt:inset windowtext .75pt;padding:0cm 5.4pt 0cm 5.4pt;
            height:5.4pt'>
            <p align=center style='text-align:center;mso-line-height-alt:5.4pt'><span
            style='font-size:9.0pt'>珠地棉普通<span lang=EN-US>POLO</span></span></p>
            </td>
           </tr>
           <tr style='mso-yfti-irow:9;height:5.4pt'>
            <td width=66 colspan=4 style='width:49.75pt;border-top:none;border-left:none;
            border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
            mso-border-top-alt:inset windowtext .75pt;padding:0cm 5.4pt 0cm 5.4pt;
            height:5.4pt'>
            <p align=center style='text-align:center;mso-line-height-alt:5.4pt'><span
            style='font-size:9.0pt'>珠地棉优质<span lang=EN-US>POLO</span></span></p>
            </td>
            <td width=142 colspan=10 style='width:106.35pt;border-top:none;border-left:
            none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
            mso-border-top-alt:inset windowtext .75pt;padding:0cm 5.4pt 0cm 5.4pt;
            height:5.4pt'>
            <p align=center style='text-align:center;mso-line-height-alt:5.4pt'><span
            style='font-size:9.0pt'>珠地棉高档<span lang=EN-US>POLO</span></span></p>
            </td>
            <td width=142 colspan=10 style='width:106.5pt;border-top:none;border-left:
            none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
            mso-border-top-alt:inset windowtext .75pt;padding:0cm 5.4pt 0cm 5.4pt;
            height:5.4pt'>
            <p align=center style='text-align:center;mso-line-height-alt:5.4pt'><span
            lang=EN-US style='font-size:9.0pt'>200</span><span style='font-size:9.0pt'>克红鹰普棉纯色</span></p>
            </td>
            <td width=198 colspan=8 style='width:148.5pt;border-top:none;border-left:
            none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
            mso-border-top-alt:inset windowtext .75pt;padding:0cm 5.4pt 0cm 5.4pt;
            height:5.4pt'>
            <p align=center style='text-align:center;mso-line-height-alt:5.4pt'><span
            style='font-size:9.0pt'>其他</span></p>
            </td>
           </tr>
           <tr style='mso-yfti-irow:10;height:26.9pt'>
            <td width=66 colspan=3 style='width:49.65pt;border-top:none;border-left:solid windowtext 1.5pt;
            border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
            mso-border-top-alt:inset windowtext .75pt;padding:0cm 5.4pt 0cm 5.4pt;
            height:26.9pt'>
            <p align=center style='text-align:center'><b><span style='font-size:9.0pt'>其他款式</span></b></p>
            </td>
            <td width=298 colspan=21 style='width:223.5pt;border-top:none;border-left:
            none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
            mso-border-top-alt:inset windowtext .75pt;padding:0cm 5.4pt 0cm 5.4pt;
            height:26.9pt'>
            <p><span style='font-size:9.0pt'>无</span></p>
            </td>
            <td width=52 colspan=3 style='width:39.1pt;border-top:none;border-left:none;
            border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
            mso-border-top-alt:inset windowtext .75pt;mso-border-left-alt:inset windowtext .75pt;
            padding:0cm 5.4pt 0cm 5.4pt;height:26.9pt'>
            <p align=center style='text-align:center'><span style='font-size:9.0pt'>例</span></p>
            </td>
            <td width=198 colspan=8 style='width:148.5pt;border-top:none;border-left:
            none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
            mso-border-top-alt:inset windowtext .75pt;padding:0cm 5.4pt 0cm 5.4pt;
            height:26.9pt'>
            <p><span style='font-size:9.0pt'>西服<span lang=EN-US>/</span>球服<span
            lang=EN-US>/</span>厂服<span lang=EN-US>/</span>背心<span lang=EN-US>/</span>马甲</span></p>
            </td>
           </tr>
           <tr style='mso-yfti-irow:11;height:39.45pt'>
            <td width=66 colspan=3 rowspan=2 style='width:49.65pt;border-top:none;
            border-left:solid windowtext 1.5pt;border-bottom:solid windowtext 1.0pt;
            border-right:solid windowtext 1.0pt;mso-border-top-alt:inset windowtext .75pt;
            padding:0cm 5.4pt 0cm 5.4pt;height:39.45pt'>
            <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
            style='font-size:9.0pt'>码号<span lang=EN-US><o:p></o:p></span></span></b></p>
            </td>
            <td width=39 rowspan=2 style='width:29.15pt;border-top:none;border-left:none;
            border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
            mso-border-top-alt:inset windowtext .75pt;mso-border-left-alt:inset windowtext .75pt;
            padding:0cm 5.4pt 0cm 5.4pt;height:39.45pt'>
            <p class=MsoNormal><span style='font-size:8.0pt'>男款<span lang=EN-US><o:p></o:p></span></span></p>
            <p class=MsoNormal><span style='font-size:8.0pt'>（通款）<span lang=EN-US><o:p></o:p></span></span></p>
            </td>
            <td width=47 colspan=5 style='width:35.4pt;border-top:none;border-left:none;
            border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
            mso-border-top-alt:inset windowtext .75pt;mso-border-left-alt:inset windowtext .75pt;
            padding:0cm 5.4pt 0cm 5.4pt;height:39.45pt'>
            <p align=center style='text-align:center;mso-line-height-alt:8.7pt'><span
            lang=EN-US style='font-size:9.0pt'>*XS</span></p>
            </td>
            <td width=28 style='width:21.3pt;border-top:none;border-left:none;border-bottom:
            solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
            inset windowtext .75pt;mso-border-left-alt:inset windowtext .75pt;padding:
            0cm 5.4pt 0cm 5.4pt;height:39.45pt'>
            <p align=center style='text-align:center;mso-line-height-alt:8.7pt'><span
            lang=EN-US style='font-size:9.0pt'>*S</span></p>
            </td>
            <td width=28 colspan=3 style='width:21.25pt;border-top:none;border-left:none;
            border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
            mso-border-top-alt:inset windowtext .75pt;mso-border-left-alt:inset windowtext .75pt;
            padding:0cm 5.4pt 0cm 5.4pt;height:39.45pt'>
            <p align=center style='text-align:center;mso-line-height-alt:8.7pt'><span
            lang=EN-US style='font-size:9.0pt'>*M</span></p>
            </td>
            <td width=19 style='width:14.15pt;border-top:none;border-left:none;
            border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
            mso-border-top-alt:inset windowtext .75pt;mso-border-left-alt:inset windowtext .75pt;
            padding:0cm 5.4pt 0cm 5.4pt;height:39.45pt'>
            <p align=center style='text-align:center;mso-line-height-alt:8.7pt'><span
            lang=EN-US style='font-size:9.0pt'>L</span></p>
            </td>
            <td width=28 style='width:20.7pt;border-top:none;border-left:none;border-bottom:
            solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
            inset windowtext .75pt;mso-border-left-alt:inset windowtext .75pt;padding:
            0cm 5.4pt 0cm 5.4pt;height:39.45pt'>
            <p align=center style='text-align:center;mso-line-height-alt:8.7pt'><span
            lang=EN-US style='font-size:9.0pt'>XL</span></p>
            </td>
            <td width=28 colspan=3 style='width:21.35pt;border-top:none;border-left:none;
            border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
            mso-border-top-alt:inset windowtext .75pt;mso-border-left-alt:inset windowtext .75pt;
            padding:0cm 5.4pt 0cm 5.4pt;height:39.45pt'>
            <p align=center style='text-align:center;mso-line-height-alt:8.7pt'><span
            lang=EN-US style='font-size:9.0pt'>XXL</span></p>
            </td>
            <td width=38 colspan=4 style='width:28.45pt;border-top:none;border-left:none;
            border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
            mso-border-top-alt:inset windowtext .75pt;mso-border-left-alt:inset windowtext .75pt;
            padding:0cm 5.4pt 0cm 5.4pt;height:39.45pt'>
            <p align=center style='text-align:center;mso-line-height-alt:8.7pt'><span
            lang=EN-US style='font-size:9.0pt'>XXXL</span></p>
            </td>
            <td width=38 style='width:1.0cm;border-top:none;border-left:none;border-bottom:
            solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
            inset windowtext .75pt;mso-border-left-alt:inset windowtext .75pt;padding:
            0cm 5.4pt 0cm 5.4pt;height:39.45pt'>
            <p align=center style='text-align:center;mso-line-height-alt:8.7pt'><span
            lang=EN-US style='font-size:9.0pt'>XXXXL</span></p>
            </td>
            <td width=38 colspan=3 style='width:1.0cm;border-top:none;border-left:none;
            border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
            mso-border-top-alt:inset windowtext .75pt;mso-border-left-alt:inset windowtext .75pt;
            padding:0cm 5.4pt 0cm 5.4pt;height:39.45pt'>
            <p align=center style='text-align:center;mso-line-height-alt:8.7pt'><span
            style='font-size:9.0pt'>女款</span></p>
            </td>
            <td width=29 colspan=1 style='width:21.4pt;border-top:none;border-left:none;
            border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
            mso-border-top-alt:inset windowtext .75pt;mso-border-left-alt:inset windowtext .75pt;
            padding:0cm 5.4pt 0cm 5.4pt;height:39.45pt'>
            <p align=center style='text-align:center;mso-line-height-alt:8.7pt'><span
            lang=EN-US style='font-size:9.0pt'>S</span></p>
            </td>
            <td width=29 colspan=2 style='width:21.4pt;border-top:none;border-left:none;
            border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
            mso-border-top-alt:inset windowtext .75pt;mso-border-left-alt:inset windowtext .75pt;
            padding:0cm 5.4pt 0cm 5.4pt;height:39.45pt'>
            <p align=center style='text-align:center;mso-line-height-alt:8.7pt'><span
            lang=EN-US style='font-size:9.0pt'>M</span></p>
            </td>
            <td width=29 colspan=2 style='width:21.45pt;border-top:none;border-left:none;
            border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
            mso-border-top-alt:inset windowtext .75pt;mso-border-left-alt:inset windowtext .75pt;
            padding:0cm 5.4pt 0cm 5.4pt;height:39.45pt'>
            <p align=center style='text-align:center;mso-line-height-alt:8.7pt'><span
            lang=EN-US style='font-size:9.0pt'>L</span></p>
            </td>
            <td width=28 colspan=2 style='width:21.3pt;border-top:none;border-left:none;
            border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
            mso-border-top-alt:inset windowtext .75pt;mso-border-left-alt:inset windowtext .75pt;
            padding:0cm 5.4pt 0cm 5.4pt;height:39.45pt'>
            <p align=center style='text-align:center;mso-line-height-alt:8.7pt'><span
            lang=EN-US style='font-size:9.0pt'>XL</span></p>
            </td>
            <td width=38 style='width:28.55pt;border-top:none;border-left:none;
            border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
            mso-border-top-alt:inset windowtext .75pt;mso-border-left-alt:inset windowtext .75pt;
            padding:0cm 5.4pt 0cm 5.4pt;height:39.45pt'>
            <p align=center style='text-align:center;mso-line-height-alt:8.7pt'><span
            lang=EN-US style='font-size:9.0pt'>XXL</span><span lang=EN-US
            style='font-size:7.5pt'>(</span><span style='font-size:7.5pt'>男<span
            lang=EN-US>S)</span></span></p>
            </td>
            <td width=93 style='width:69.95pt;border-top:none;border-left:none;
            border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
            mso-border-top-alt:inset windowtext .75pt;mso-border-left-alt:inset windowtext .75pt;
            padding:0cm 5.4pt 0cm 5.4pt;height:39.45pt'>
            <p align=center style='text-align:center;mso-line-height-alt:8.7pt'><span
            style='font-size:9.0pt'>总计</span></p>
            </td>
           </tr>
           <tr style='mso-yfti-irow:12;height:51.35pt'>
            <td width=47 colspan=5 style='width:35.4pt;border-top:none;border-left:none;
            border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
            mso-border-top-alt:inset windowtext .75pt;mso-border-left-alt:inset windowtext .75pt;
            padding:0cm 5.4pt 0cm 5.4pt;height:51.35pt'>
            <p align=center style='text-align:center'><span lang=EN-US style='font-size:
            9.0pt'>{$order->mxs}</span></p>
            </td>
            <td width=28 style='width:21.3pt;border-top:none;border-left:none;border-bottom:
            solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
            inset windowtext .75pt;mso-border-left-alt:inset windowtext .75pt;padding:
            0cm 5.4pt 0cm 5.4pt;height:51.35pt'>
            <p align=center style='text-align:center'><span lang=EN-US style='font-size:
            9.0pt'>{$order->ms}</span></p>
            </td>
            <td width=28 colspan=3 style='width:21.25pt;border-top:none;border-left:none;
            border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
            mso-border-top-alt:inset windowtext .75pt;mso-border-left-alt:inset windowtext .75pt;
            padding:0cm 5.4pt 0cm 5.4pt;height:51.35pt'>
            <p align=center style='text-align:center'><span lang=EN-US style='font-size:
            9.0pt'>{$order->mm}</span></p>
            </td>
            <td width=19 style='width:14.15pt;border-top:none;border-left:none;
            border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
            mso-border-top-alt:inset windowtext .75pt;mso-border-left-alt:inset windowtext .75pt;
            padding:0cm 5.4pt 0cm 5.4pt;height:51.35pt'>
            <p align=center style='text-align:center'><span lang=EN-US style='font-size:
            9.0pt'>{$order->ml}</span></p>
            </td>
            <td width=28 style='width:20.7pt;border-top:none;border-left:none;border-bottom:
            solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
            inset windowtext .75pt;mso-border-left-alt:inset windowtext .75pt;padding:
            0cm 5.4pt 0cm 5.4pt;height:51.35pt'>
            <p align=center style='text-align:center'><span lang=EN-US style='font-size:
            9.0pt'>{$order->mxl}</span></p>
            </td>
            <td width=28 colspan=3 style='width:21.35pt;border-top:none;border-left:none;
            border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
            mso-border-top-alt:inset windowtext .75pt;mso-border-left-alt:inset windowtext .75pt;
            padding:0cm 5.4pt 0cm 5.4pt;height:51.35pt'>
            <p align=center style='text-align:center'><span lang=EN-US style='font-size:
            9.0pt'>{$order->mxxl}</span></p>
            </td>
            <td width=38 colspan=4 style='width:28.45pt;border-top:none;border-left:none;
            border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
            mso-border-top-alt:inset windowtext .75pt;mso-border-left-alt:inset windowtext .75pt;
            padding:0cm 5.4pt 0cm 5.4pt;height:51.35pt'>
            <p align=center style='text-align:center'><span lang=EN-US style='font-size:
            9.0pt'>{$order->mxxxl}</span></p>
            </td>
            <td width=38 style='width:1.0cm;border-top:none;border-left:none;border-bottom:
            solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
            inset windowtext .75pt;mso-border-left-alt:inset windowtext .75pt;padding:
            0cm 5.4pt 0cm 5.4pt;height:51.35pt'>
            <p align=center style='text-align:center'><span lang=EN-US style='font-size:
            9.0pt'>{$order->mxxxxl}</span></p>
            </td>
            <td width=38 colspan=3 style='width:1.0cm;border-top:none;border-left:none;
            border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
            mso-border-top-alt:inset windowtext .75pt;mso-border-left-alt:inset windowtext .75pt;
            padding:0cm 5.4pt 0cm 5.4pt;height:51.35pt'></td>
            <td width=29 colspan=1 style='width:21.4pt;border-top:none;border-left:none;
            border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
            mso-border-top-alt:inset windowtext .75pt;mso-border-left-alt:inset windowtext .75pt;
            padding:0cm 5.4pt 0cm 5.4pt;height:51.35pt'>
            <p align=center style='text-align:center'><span lang=EN-US style='font-size:
            9.0pt'>{$order->fs}</span></p>
            </td>
            <td width=29 colspan=2 style='width:21.4pt;border-top:none;border-left:none;
            border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
            mso-border-top-alt:inset windowtext .75pt;mso-border-left-alt:inset windowtext .75pt;
            padding:0cm 5.4pt 0cm 5.4pt;height:51.35pt'>
            <p align=center style='text-align:center'><span lang=EN-US style='font-size:
            9.0pt'>{$order->fm}</span></p>
            </td>
            <td width=29 colspan=2 style='width:21.45pt;border-top:none;border-left:none;
            border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
            mso-border-top-alt:inset windowtext .75pt;mso-border-left-alt:inset windowtext .75pt;
            padding:0cm 5.4pt 0cm 5.4pt;height:51.35pt'>
            <p align=center style='text-align:center'><span lang=EN-US style='font-size:
            9.0pt'>{$order->fl}</span></p>
            </td>
            <td width=28 colspan=2 style='width:21.3pt;border-top:none;border-left:none;
            border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
            mso-border-top-alt:inset windowtext .75pt;mso-border-left-alt:inset windowtext .75pt;
            padding:0cm 5.4pt 0cm 5.4pt;height:51.35pt'>
            <p align=center style='text-align:center'><span lang=EN-US style='font-size:
            9.0pt'>{$order->fxl}</span></p>
            </td>
            <td width=38 style='width:28.55pt;border-top:none;border-left:none;
            border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
            mso-border-top-alt:inset windowtext .75pt;mso-border-left-alt:inset windowtext .75pt;
            padding:0cm 5.4pt 0cm 5.4pt;height:51.35pt'>
            <p align=center style='text-align:center'><span lang=EN-US style='font-size:
            9.0pt'>{$order->fxxl}</span></p>
            </td>
            <td width=93 style='width:69.95pt;border-top:none;border-left:none;
            border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
            mso-border-top-alt:inset windowtext .75pt;mso-border-left-alt:inset windowtext .75pt;
            padding:0cm 5.4pt 0cm 5.4pt;height:51.35pt'>{$order->totalsize}</td>
           </tr>
           <tr style='mso-yfti-irow:13;height:15.7pt'>
            <td width=66 colspan=3 style='width:49.65pt;border-top:none;border-left:solid windowtext 1.5pt;
            border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
            mso-border-top-alt:inset windowtext .75pt;padding:0cm 5.4pt 0cm 5.4pt;
            height:15.7pt'>
            <p align=center style='text-align:center'><b><span style='font-size:9.0pt'>总<span
            lang=EN-US>&nbsp; </span>价</span></b></p>
            </td>
            <td width=62 colspan=3 style='width:46.7pt;border-top:none;border-left:none;
            border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
            mso-border-top-alt:inset windowtext .75pt;padding:0cm 5.4pt 0cm 5.4pt;
            height:15.7pt'>
            <p><span lang=EN-US style='font-size:9.0pt'>&nbsp;</span></p>
            </td>
            <td width=156 colspan=13 rowspan=3 style='width:117.1pt;border-top:none;
            border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
            mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext 1.0pt;
            padding:0cm 5.4pt 0cm 5.4pt;height:15.7pt'>
            <p align=center style='text-align:center'><b><span style='font-size:9.0pt'>印制说明</span></b></p>
            </td>
            <td width=330 colspan=16 rowspan=3 style='width:247.3pt;border-top:none;
            border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
            mso-border-top-alt:inset windowtext .75pt;mso-border-left-alt:inset windowtext .75pt;
            padding:0cm 5.4pt 0cm 5.4pt;height:15.7pt'>
            <p><span lang=EN-US>{$order->print_desc}</span></p>
            </td>
           </tr>
           <tr style='mso-yfti-irow:14;height:15.7pt'>
            <td width=66 colspan=3 style='width:49.65pt;border-top:none;border-left:solid windowtext 1.5pt;
            border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
            mso-border-top-alt:inset windowtext .75pt;padding:0cm 5.4pt 0cm 5.4pt;
            height:15.7pt'>
            <p align=center style='text-align:center'><b><span style='font-size:9.0pt'>定<span
            lang=EN-US>&nbsp; </span>金</span></b></p>
            </td>
            <td width=62 colspan=3 style='width:46.7pt;border-top:none;border-left:none;
            border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
            mso-border-top-alt:inset windowtext .75pt;padding:0cm 5.4pt 0cm 5.4pt;
            height:15.7pt'>
            <p><b><span lang=EN-US style='font-size:9.0pt'>&nbsp;</span></b></p>
            </td>
           </tr>
           <tr style='mso-yfti-irow:15;height:35.1pt'>
            <td width=66 colspan=3 style='width:49.65pt;border-top:none;border-left:solid windowtext 1.5pt;
            border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
            mso-border-top-alt:inset windowtext .75pt;padding:0cm 5.4pt 0cm 5.4pt;
            height:35.1pt'>
            <p align=center style='text-align:center'><b><span style='font-size:9.0pt'>接单日期</span></b></p>
            </td>
            <td width=62 colspan=3 style='width:46.7pt;border-top:none;border-left:none;
            border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
            mso-border-top-alt:inset windowtext .75pt;padding:0cm 5.4pt 0cm 5.4pt;
            height:35.1pt'>
            <p><b><span lang=EN-US style='font-size:9.0pt'>{$order->addtime}</span></b></p>
            </td>
           </tr>
           <tr style='mso-yfti-irow:16;height:15.7pt'>
            <td width=66 colspan=3 style='width:49.65pt;border-top:none;border-left:solid windowtext 1.5pt;
            border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
            mso-border-top-alt:inset windowtext .75pt;padding:0cm 5.4pt 0cm 5.4pt;
            height:15.7pt'>
            <p align=center style='text-align:center'><b><span style='font-size:9.0pt'>发货日期</span></b></p>
            </td>
            <td width=62 colspan=3 style='width:46.7pt;border-top:none;border-left:none;
            border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
            mso-border-top-alt:inset windowtext .75pt;padding:0cm 5.4pt 0cm 5.4pt;
            height:15.7pt'>
            <p><b><span lang=EN-US style='font-size:9.0pt;color:red'>{$order->ship_time}</span></b></p>
            </td>
            <td width=156 colspan=13 rowspan=2 style='width:117.1pt;border-top:none;
            border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
            mso-border-top-alt:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext 1.0pt;
            padding:0cm 5.4pt 0cm 5.4pt;height:15.7pt'>
            <p align=center style='text-align:center'><b><span style='font-size:9.0pt'>备<span
            lang=EN-US>&nbsp;&nbsp;&nbsp; </span>注</span></b></p>
            </td>
            <td width=330 colspan=16 rowspan=2 style='width:247.3pt;border-top:none;
            border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
            mso-border-top-alt:inset windowtext .75pt;mso-border-left-alt:inset windowtext .75pt;
            padding:0cm 5.4pt 0cm 5.4pt;height:15.7pt'>
            <p><b><span lang=EN-US style='font-size:9.0pt'>{$order->note}</span></b></p>
            </td>
           </tr>
           <tr style='mso-yfti-irow:17;height:15.7pt'>
            <td width=66 colspan=3 style='width:49.65pt;border-top:none;border-left:solid windowtext 1.5pt;
            border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
            mso-border-top-alt:inset windowtext .75pt;padding:0cm 5.4pt 0cm 5.4pt;
            height:15.7pt'>
            <p align=center style='text-align:center'><b><span style='font-size:9.0pt'>接 单
            人</span></b></p>
            </td>
            <td width=62 colspan=3 style='width:46.7pt;border-top:none;border-left:none;
            border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
            mso-border-top-alt:inset windowtext .75pt;padding:0cm 5.4pt 0cm 5.4pt;
            height:15.7pt'>
            <p><b><span lang=EN-US style='font-size:9.0pt'>{$order->sales}</span></b></p>
            </td>
           </tr>
           <tr style='mso-yfti-irow:18;height:17.7pt'>
            <td width=614 colspan=35 style='width:460.75pt;border-top:none;border-left:
            solid windowtext 1.5pt;border-bottom:solid windowtext 1.0pt;border-right:
            solid windowtext 1.5pt;mso-border-top-alt:inset windowtext .75pt;padding:
            0cm 5.4pt 0cm 5.4pt;height:17.7pt'>
            <p align=center style='text-align:center'><b><span style='font-size:9.0pt'>设计样稿（设计师：刘占峰）</span></b></p>
            </td>
           </tr>
           <tr style='mso-yfti-irow:19;height:26.95pt'>
            <td width=614 colspan=35 style='width:460.75pt;border-top:none;border-left:
            solid windowtext 1.5pt;border-bottom:solid windowtext 1.0pt;border-right:
            solid windowtext 1.5pt;mso-border-top-alt:inset windowtext .75pt;padding:
            0cm 5.4pt 0cm 5.4pt;height:26.95pt'>
            <p align=center style='text-align:center'><b><span lang=EN-US
            style='font-size:9.0pt;color:silver'>&nbsp;</span></b></p>
            </td>
           </tr>
           <tr style='mso-yfti-irow:20;height:27.7pt'>
            <td width=66 colspan=3 style='width:49.65pt;border-top:none;border-left:solid windowtext 1.5pt;
            border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
            mso-border-top-alt:inset windowtext .75pt;padding:0cm 5.4pt 0cm 5.4pt;
            height:27.7pt'>
            <p align=center style='text-align:center'><b><span style='font-size:9.0pt;
            color:red'>配送方式</span></b></p>
            </td>
            <td width=47 colspan=2 style='width:35.55pt;border-top:none;border-left:none;
            border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
            mso-border-top-alt:inset windowtext .75pt;mso-border-left-alt:inset windowtext .75pt;
            padding:0cm 5.4pt 0cm 5.4pt;height:27.7pt'>
            <p align=center style='text-align:center'><b><span lang=EN-US
            style='font-size:9.0pt;color:black'>{$order->ship_method}</span></b></p>
            </td>
            <td width=24 colspan=3 style='width:18.0pt;border-top:none;border-left:none;
            border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
            mso-border-top-alt:inset windowtext .75pt;mso-border-left-alt:inset windowtext .75pt;
            padding:0cm 5.4pt 0cm 5.4pt;height:27.7pt'>
            <p align=center style='text-align:center'><b><span style='font-size:9.0pt;
            color:black'>收件人</span></b></p>
            </td>
            <td width=68 colspan=4 style='width:50.7pt;border-top:none;border-left:none;
            border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
            mso-border-top-alt:inset windowtext .75pt;mso-border-left-alt:inset windowtext .75pt;
            padding:0cm 5.4pt 0cm 5.4pt;height:27.7pt'>
            <p align=center style='text-align:center'><b><span lang=EN-US
            style='font-size:9.0pt;color:black'>{$order->ship_person}</span></b></p>
            </td>
            <td width=54 colspan=4 style='width:40.5pt;border-top:none;border-left:none;
            border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
            mso-border-top-alt:inset windowtext .75pt;mso-border-left-alt:inset windowtext .75pt;
            padding:0cm 5.4pt 0cm 5.4pt;height:27.7pt'>
            <p align=center style='text-align:center'><b><span style='font-size:9.0pt;
            color:black'>收件地址</span></b></p>
            </td>
            <td width=166 colspan=12 style='width:124.3pt;border-top:none;border-left:
            none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
            mso-border-top-alt:inset windowtext .75pt;padding:0cm 5.4pt 0cm 5.4pt;
            height:27.7pt'>
            <p><b><span lang=EN-US style='font-size:9.0pt;color:black'>{$order->ship_addr}</span></b></p>
            </td>
            <td width=32 colspan=4 style='width:24.3pt;border-top:none;border-left:none;
            border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
            mso-border-top-alt:inset windowtext .75pt;mso-border-left-alt:inset windowtext .75pt;
            padding:0cm 5.4pt 0cm 5.4pt;height:27.7pt'>
            <p align=center style='text-align:center'><b><span style='font-size:9.0pt;
            color:black'>联系方式</span></b></p>
            </td>
            <td width=157 colspan=3 style='width:117.75pt;border-top:none;border-left:
            none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.5pt;
            mso-border-top-alt:inset windowtext .75pt;padding:0cm 5.4pt 0cm 5.4pt;
            height:27.7pt'>
            <p align=center style='text-align:center'><b><span lang=EN-US
            style='font-size:9.0pt;color:black'>{$order->ship_tel}</span></b></p>
            </td>
           </tr>
          </table>
          <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p></div></body></html>
EOD;

      echo $html; 
    }
}
?>