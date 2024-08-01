PGDMP                      |            INFOP_Planificacion    16.3    16.3 I    N           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            O           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            P           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            Q           1262    22378    INFOP_Planificacion    DATABASE     �   CREATE DATABASE "INFOP_Planificacion" WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE_PROVIDER = libc LOCALE = 'Spanish_Honduras.1252';
 %   DROP DATABASE "INFOP_Planificacion";
                postgres    false                      0    29799    cargos 
   TABLE DATA                 public          postgres    false    222   5                 0    29895    componentes 
   TABLE DATA                 public          postgres    false    235   �5                 0    29904    lineas_estrategicas 
   TABLE DATA                 public          postgres    false    237   b6       
          0    29781    tipos_unidades 
   TABLE DATA                 public          postgres    false    218   �7                 0    29790    tipos_usuarios 
   TABLE DATA                 public          postgres    false    220   8                 0    29808    users 
   TABLE DATA                 public          postgres    false    224   �8                 0    29918    poas 
   TABLE DATA                 public          postgres    false    239   �;       #          0    29954    metas_administrativas 
   TABLE DATA                 public          postgres    false    243   <       =          0    30119    avances_metas_administrativas 
   TABLE DATA                 public          postgres    false    269   �=       !          0    29935    metas_operativas 
   TABLE DATA                 public          postgres    false    241   >       ;          0    30107    avances_metas_operativas 
   TABLE DATA                 public          postgres    false    267   &>                 0    29851    cache 
   TABLE DATA                 public          postgres    false    227   @>                 0    29858    cache_locks 
   TABLE DATA                 public          postgres    false    228   Z>       A          0    30145    evidencias_paccs 
   TABLE DATA                 public          postgres    false    273   t>       ?          0    30131    evidencias_poas 
   TABLE DATA                 public          postgres    false    271   �>                 0    29883    failed_jobs 
   TABLE DATA                 public          postgres    false    233   �>       )          0    29997    presupuestos 
   TABLE DATA                 public          postgres    false    249   �>       1          0    30045     presupuestos_maquinarias_equipos 
   TABLE DATA                 public          postgres    false    257   �>       3          0    30057    renglones_maquinarias_equipos 
   TABLE DATA                 public          postgres    false    259   �>       5          0    30064    gastos_maquinarias_equipos 
   TABLE DATA                 public          postgres    false    261   ?       7          0    30081    paccs 
   TABLE DATA                 public          postgres    false    263   *?       9          0    30093    gastos_paccs 
   TABLE DATA                 public          postgres    false    265   D?       +          0    30009    grupos_presupuestos 
   TABLE DATA                 public          postgres    false    251   ^?       -          0    30016    subgrupos_presupuestos 
   TABLE DATA                 public          postgres    false    253   x?       /          0    30028    gastos_presupuestos 
   TABLE DATA                 public          postgres    false    255   �?                 0    29875    job_batches 
   TABLE DATA                 public          postgres    false    231   �?                 0    29866    jobs 
   TABLE DATA                 public          postgres    false    230   �?       G          0    30185    metas_reportes_administrativos 
   TABLE DATA                 public          postgres    false    279   �?       E          0    30171    metas_reportes_operativos 
   TABLE DATA                 public          postgres    false    277   �?                 0    29774 
   migrations 
   TABLE DATA                 public          postgres    false    216   @       K          0    30213    notificaciones 
   TABLE DATA                 public          postgres    false    283   B                 0    29835    password_reset_tokens 
   TABLE DATA                 public          postgres    false    225   B       '          0    29985    programaciones_administrativas 
   TABLE DATA                 public          postgres    false    247   8B       %          0    29973    programaciones_operativas 
   TABLE DATA                 public          postgres    false    245   �B       C          0    30159    reportes_poas 
   TABLE DATA                 public          postgres    false    275   �B       I          0    30199    reportes_presupuestos 
   TABLE DATA                 public          postgres    false    281   C                 0    29842    sessions 
   TABLE DATA                 public          postgres    false    226   3C       R           0    0 $   avances_metas_administrativas_id_seq    SEQUENCE SET     S   SELECT pg_catalog.setval('public.avances_metas_administrativas_id_seq', 1, false);
          public          postgres    false    268            S           0    0    avances_metas_operativas_id_seq    SEQUENCE SET     N   SELECT pg_catalog.setval('public.avances_metas_operativas_id_seq', 1, false);
          public          postgres    false    266            T           0    0    cargos_id_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('public.cargos_id_seq', 3, true);
          public          postgres    false    221            U           0    0    componentes_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.componentes_id_seq', 6, true);
          public          postgres    false    234            V           0    0    evidencias_paccs_id_seq    SEQUENCE SET     F   SELECT pg_catalog.setval('public.evidencias_paccs_id_seq', 1, false);
          public          postgres    false    272            W           0    0    evidencias_poas_id_seq    SEQUENCE SET     E   SELECT pg_catalog.setval('public.evidencias_poas_id_seq', 1, false);
          public          postgres    false    270            X           0    0    failed_jobs_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.failed_jobs_id_seq', 1, false);
          public          postgres    false    232            Y           0    0 !   gastos_maquinarias_equipos_id_seq    SEQUENCE SET     P   SELECT pg_catalog.setval('public.gastos_maquinarias_equipos_id_seq', 1, false);
          public          postgres    false    260            Z           0    0    gastos_paccs_id_seq    SEQUENCE SET     B   SELECT pg_catalog.setval('public.gastos_paccs_id_seq', 1, false);
          public          postgres    false    264            [           0    0    gastos_presupuestos_id_seq    SEQUENCE SET     I   SELECT pg_catalog.setval('public.gastos_presupuestos_id_seq', 1, false);
          public          postgres    false    254            \           0    0    grupos_presupuestos_id_seq    SEQUENCE SET     I   SELECT pg_catalog.setval('public.grupos_presupuestos_id_seq', 1, false);
          public          postgres    false    250            ]           0    0    jobs_id_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('public.jobs_id_seq', 1, false);
          public          postgres    false    229            ^           0    0    lineas_estrategicas_id_seq    SEQUENCE SET     I   SELECT pg_catalog.setval('public.lineas_estrategicas_id_seq', 19, true);
          public          postgres    false    236            _           0    0    metas_administrativas_id_seq    SEQUENCE SET     J   SELECT pg_catalog.setval('public.metas_administrativas_id_seq', 7, true);
          public          postgres    false    242            `           0    0    metas_operativas_id_seq    SEQUENCE SET     F   SELECT pg_catalog.setval('public.metas_operativas_id_seq', 1, false);
          public          postgres    false    240            a           0    0 %   metas_reportes_administrativos_id_seq    SEQUENCE SET     T   SELECT pg_catalog.setval('public.metas_reportes_administrativos_id_seq', 1, false);
          public          postgres    false    278            b           0    0     metas_reportes_operativos_id_seq    SEQUENCE SET     O   SELECT pg_catalog.setval('public.metas_reportes_operativos_id_seq', 1, false);
          public          postgres    false    276            c           0    0    migrations_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.migrations_id_seq', 30, true);
          public          postgres    false    215            d           0    0    notificaciones_id_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.notificaciones_id_seq', 1, false);
          public          postgres    false    282            e           0    0    paccs_id_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('public.paccs_id_seq', 1, false);
          public          postgres    false    262            f           0    0    poas_id_seq    SEQUENCE SET     9   SELECT pg_catalog.setval('public.poas_id_seq', 5, true);
          public          postgres    false    238            g           0    0    presupuestos_id_seq    SEQUENCE SET     B   SELECT pg_catalog.setval('public.presupuestos_id_seq', 1, false);
          public          postgres    false    248            h           0    0 '   presupuestos_maquinarias_equipos_id_seq    SEQUENCE SET     V   SELECT pg_catalog.setval('public.presupuestos_maquinarias_equipos_id_seq', 1, false);
          public          postgres    false    256            i           0    0 %   programaciones_administrativas_id_seq    SEQUENCE SET     S   SELECT pg_catalog.setval('public.programaciones_administrativas_id_seq', 8, true);
          public          postgres    false    246            j           0    0     programaciones_operativas_id_seq    SEQUENCE SET     O   SELECT pg_catalog.setval('public.programaciones_operativas_id_seq', 1, false);
          public          postgres    false    244            k           0    0 $   renglones_maquinarias_equipos_id_seq    SEQUENCE SET     S   SELECT pg_catalog.setval('public.renglones_maquinarias_equipos_id_seq', 1, false);
          public          postgres    false    258            l           0    0    reportes_poas_id_seq    SEQUENCE SET     C   SELECT pg_catalog.setval('public.reportes_poas_id_seq', 1, false);
          public          postgres    false    274            m           0    0    reportes_presupuestos_id_seq    SEQUENCE SET     K   SELECT pg_catalog.setval('public.reportes_presupuestos_id_seq', 1, false);
          public          postgres    false    280            n           0    0    subgrupos_presupuestos_id_seq    SEQUENCE SET     L   SELECT pg_catalog.setval('public.subgrupos_presupuestos_id_seq', 1, false);
          public          postgres    false    252            o           0    0    tipos_unidades_id_seq    SEQUENCE SET     C   SELECT pg_catalog.setval('public.tipos_unidades_id_seq', 2, true);
          public          postgres    false    217            p           0    0    tipos_usuarios_id_seq    SEQUENCE SET     C   SELECT pg_catalog.setval('public.tipos_usuarios_id_seq', 6, true);
          public          postgres    false    219            q           0    0    users_id_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('public.users_id_seq', 14, true);
          public          postgres    false    223               �   x���v
Q���W((M��L�KN,J�/Vs�	uV�0�QP�JMKUpI-H,*I�M�+�W
����Y*ZX�Y[�ִ��$h�1P�s~~QJf^bJ~-�0�������������Û�H��� �6U�         �   x���A� ��>Ż���s��:�0s�������O:������?ޓ�ڀT���}���ݸ<�e���􄁟{��&G`'m~_���M0��2r�|_cV�x{Ld�E�UxK��b�Xu-�/�Bq�U"`��<�e�}�~�x����N����1��p�V+nZ�2���M���         ,  x���1k�0��ݿB[ZH�t'ْ:u�`)4i��S��:��U�Co8d�G��C��q�zR�����?��e{���a>���g����e�����mwTf���j��2[�J_@���nAu1��ǧ�/3�@`&ǻ�mn.7�Ld&�ǥw�\nv�����N��rӓ	̔ڦ�]n.7��L�m�:;��F���qQ�kt4�C��5�C���:d�
E�
���B�K�x^�ɋ2�U�%*w�.7W��Pd�����\������ub^����'*����2W��Pd��7]ossB��DN�a      
   m   x���v
Q���W((M��L�+�,�/�/��LILI-Vs�	uV�0�QPwL����,.)J,�,KT�����Y*ZX�Y[�ִ��$�6#�!���Z�� x�9�         �   x���v
Q���W((M��L�+�,�/�/-.M,��/Vs�	uV�0�QP��LILQ���Lt�u�,-�̬�-q	kZsym�А�����������<Z�e4�1%73/����涙@|V���RZ��HK�L����%���Sf O�$�e�e&�i bm��         �  x���˒�@��<��2��a��	*r3"xٵ�
���Zy��X���80n(��TW}��#i�8_`��б(����'��)�h`_�'�$	�|>a�	똁kC�#���a�̢8C���|�꺰*�w�\�LE)�����ǎ�W�K�j;ccJ( �`)���
G��SUѲդ;�Q������.� �3�,��h���� �OIV@P1A-�(�q
�(HCl�����O��7��ig�D�첌�^1̆d���d4��t��ek..�3�sY��ƭ���f�u|�rR�j��Y������{9<u�W�v^���33v�z�B������K�L_R��8���N����r�A7p��.n�)���tW̡���.z�h���Tش�y���O��Q�9�4Cr�"��6T o�;�,B��|�Fl߅-�d��v߰�}t7I��B�m��E�LI$������F��C���jL�G%�4E�҇��}���+���Sf ��l�ŬNn���3������+st]�H��$��y*���GK/��M$�6�|�(0��4?���b�����Fg��[[������w�#��ՠ���F�0��@LJ���R�3�n�t޶�4��3�<��-�ː�O���^WZ��H\n��u�g.)����;�锆���5��D�.��?<<�pi�          o   x���v
Q���W((M��L�+�O,Vs�	uV�0�Q��QP7202U�Q0�QHK�)N�S 	]s]cCS+#c+#u�\�l3�Q�D�fH�6�����qq >�4w      #   �  x���MoA���
� i-�G(=�ڭ�RP�Vf֠A�3��@����!�����V�k��������#���K��VIqےG��Vj�E/�������0�f0�`�A����N��F�G�}��ǖ�7�TGT�4�S������D�7�M�-l�ŨB��y�C*�f.�a�G��Z=�Q�4�	~��q#�n����f��h�(&�qѿ~����ev���d�*�x��BLfeɅ.�c0��F�0z�	3��X@��㎼�&-ՁD��"�H���wƶ���װ�:I��]�Y�8��ZI�N'B��i���ϑ_^�g��5г�x����w��3��dD6�%F��؞Mw��&yʱ�AX)԰�(u7P�*t���hM��8�s�'&�1�=��#�b�����Kt +$�N:��H�&vp<n����7��¼�;�/��LS���z� ��6V      =   
   x���          !   
   x���          ;   
   x���             
   x���             
   x���          A   
   x���          ?   
   x���             
   x���          )   
   x���          1   
   x���          3   
   x���          5   
   x���          7   
   x���          9   
   x���          +   
   x���          -   
   x���          /   
   x���             
   x���             
   x���          G   
   x���          E   
   x���             �  x���=o�0�w�
mI��Н�/tʐ�@� I�U����"YR��dDt�^��dC�>/E�y������[�yz{.|���ܚ&��8��_�=��pWܔe	��s��:���w�N��Ԏbݩ�n�
��e��/:2t��Ǥ�qz��q�k���V#5E
蜁ޟ��� �`����m%]2�E��k��d;�aX1���K*��~5F+IĚ�X�މ�P2��m����0� `��<@�Zc�qq�)���]���#Z��14�}/?H�1�Bu���|�ϕ����MHC�M�`<��qL�+�0jCV�QG���qX�{Ѫ��ؾ����^���@����uҐ�X_,ᕢ�R�\
^i-�2%�py�p�{�ޫ��z؉酉��X�A���
�\t0;�z�l�����8���}a������p�K��(����+g��.S�qW$����뒑��.۴Ƭϫ�u����_��g�?$��o      K   
   x���             
   x���          '   �   x���v
Q���W((M��L�+(�O/J�ML���K-�OL����,.)J,�,K,Vs�	uV�0�Q "#Cu##]s]cCS+#K+C#u�\�d[j��`����X-
Sd�9�R\>51�j)P�"K-t�q������ �R�0�R.. �~      %   
   x���          C   
   x���          I   
   x���               x��RMs�@��W�ͤ*�Ç�TjDAAo2�08|D�~���q��^��������]�v���h?S��˻�5u"c�7�8��;ù��z���$ܠ�r�!߮?��㺔F���o6�`$����C#����d:��1fu��pC ��  ���R��Ѷ<��t�.����׫J�N9X���<�yqn�|�[���v<�_+wI6Ы/�Wds������@�hX(���a�n��Zż�Y,uyt�=�_�2)�=Q��4oY������c�]9<��5K0�d᰽�ѓh�3O��]�#��+m�f7\�O<W�Mi"oa�x����kZY�m*�W�9d�������ͷDp�K�CG���K�6ʅ�ʷ�O��$n�Bwʳ/[���;Md�~K�zD���¿�����Ë�~��4YV��T�������t3G�BmmjRn����b�w�,�A�k���V���w���/%����!��Fni%�tz�p�}R8Qt�4�y�'�[�;�o㢪�������!af     