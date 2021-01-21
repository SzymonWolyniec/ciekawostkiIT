{* Dodanie listenera *}
<script>
    var coll = document.getElementsByClassName("collapsible");
    var i;

    function myFnct() 
    {
        this.classList.toggle("active");
        var content = this.nextElementSibling;
        if (content.style.maxHeight)
        {
            content.style.maxHeight = null;
            this.style.borderRadius = '10px';
            
        } 
        else 
        {
            this.style.borderRadius = '10px 10px 0px 0px';
            content.style.maxHeight = content.scrollHeight + "px";
        } 
    }

    for (i = 0; i < coll.length; i++) 
    {
        coll[i].addEventListener("click", myFnct, false);
    }
</script>

{* Expand lub collapse wszystkich użytkowników *}
{if isset($expand)}

    <script>

        var coll = document.getElementsByClassName("collapsible");
        var i;

        for (i = 0; i < coll.length; i++) 
        {
            var content = coll[i].nextElementSibling;
            if (!content.style.maxHeight)
            {
                coll[i].classList.toggle("active");
                coll[i].style.borderRadius = '10px 10px 0px 0px';
                content.style.maxHeight = content.scrollHeight + "px";
            } 
        }
    </script>

{elseif isset($collapse)}
    
    <script>

        var coll = document.getElementsByClassName("collapsible");
        var i;

        for (i = 0; i < coll.length; i++) 
        {
            var content = coll[i].nextElementSibling;
            if (content.style.maxHeight)
            {
                content.style.maxHeight = null;
                coll[i].style.borderRadius = '10px';
                
            }   
        }
    </script>
    
{/if}